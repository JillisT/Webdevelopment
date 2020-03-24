<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

// Define variables and initialize with empty values
$ID = $wachtwoord = "";
$ID_err = $wachtwoord_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["ID"]))) {
        $ID_err  = "Vul je id in.";
    } else {
        $ID = trim($_POST["ID"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["wachtwoord"]))) {
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } else {
        $wachtwoord = trim($_POST["wachtwoord"]);
    }

    // Validate credentials
    if (empty($ID_err) && empty($wachtwoord_err)) {
        // Prepare a select statement
        $sql = "SELECT ID, wachtwoord, type FROM users WHERE ID = :ID";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":ID", $param_ID, PDO::PARAM_STR);


            // Set parameters
            $param_ID = trim($_POST["ID"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Check if username exists, if yes then verify password
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["ID"];
                        $hashed_wachtwoord = $row["wachtwoord"];
                        $type = $row["type"];
                        if (password_verify($wachtwoord, $hashed_wachtwoord)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["ID"] = $id;
                            $_SESSION["type"] = $type;
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else {
                            // Display an error message if password is not valid
                            $wachtwoord_err = "Het wachtwoord of id is onjuist.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $ID_err = "Er is geen account voor dit id";
                }
            } else {
                echo "Er is iets fout gegaan. Probeer het later nog eens.";
            }

            // Close statement
            unset($stmt);
        }
    }
    // Close connection
    unset($conn);
}