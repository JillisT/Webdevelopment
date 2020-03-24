<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

// Define variables and initialize with empty values
$studentID = $wachtwoord = "";
$studentID_err = $wachtwoord_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["studentID"]))) {
        $studentID_err  = "Vul je student id in.";
    } else {
        $studentID = trim($_POST["studentID"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["wachtwoord"]))) {
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } else {
        $wachtwoord = trim($_POST["wachtwoord"]);
    }

    // Validate credentials
    if (empty($studentID_err) && empty($wachtwoord_err)) {
        // Prepare a select statement
        $sql = "SELECT studentID, wachtwoord FROM users WHERE studentID = :studentID";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":studentID", $param_studentID, PDO::PARAM_STR);

            // Set parameters
            $param_studentID = trim($_POST["studentID"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Check if username exists, if yes then verify password
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["studentID"];
                        $hashed_wachtwoord = $row["wachtwoord"];
                        if (password_verify($wachtwoord, $hashed_wachtwoord)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["ID"] = $id;
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else {
                            // Display an error message if password is not valid
                            $wachtwoord_err = "Het wachtwoord of student id is onjuist.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $studentID_err = "Er is geen account voor dit student id";
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