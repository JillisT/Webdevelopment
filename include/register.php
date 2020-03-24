<?php
/*if (isset($_POST['email']) && isset($_POST['wachtwoord'])) {
    $wachtwoord = str_replace("'", "\'", $_POST['wachtwoord']);
    $email = $_POST['email'];
    $hashed_wachtwoord = md5($wachtwoord);
}

$stmt = $conn->prepare("SELECT * FROM koppel WHERE email = :email");
$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
$stmt->bindParam(":wachtwoord", $param_wachtwoord, PDO::PARAM_STR);
$stmt->bindParam(":lijstID", $param_lijstID, PDO::PARAM_STR);

$stmt->bind_param("si", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['fullname'], $_POST['partnerName']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../register.form.php?allreadyregistered");
} else {
    $secret_key = substr(md5(uniqid(rand(), true)), 0, 8);
    $stmt2 = $conn->prepare("INSERT INTO user_table (FullName, username, password, email, secret_key, partnerName) VALUES ('$fullname', '$username', '$hashedPassword', '$email', '$secret_key', '$partnername')");
    $stmt2->bind_param("sssss", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['fullname'], $_POST['partnerName'], $secret_key);
    $stmt2->execute();
    $stmt2->close();
    header("Location: ../login.form.php?successR");
}*/
// Aanmaken van values
$studentID = $wachtwoord = $herhaal_wachtwoord = "";
$studentID_err = $wachtwoord_err = $herhaal_wachtwoord_err = "";

// Wanneer er op aanmelden is gedrukt
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Kijken of er iets in de email veld is ingevoerd
    if(empty(trim($_POST["studentID"]))){
        $studentID_err = "Voer een student id in.";
    } else{
        // SELECT statement aanmaken
        $sql = "SELECT studentID FROM users WHERE studentID = :studentID";

        if($stmt = $conn->prepare($sql)){
            // Verbind de ingevoerde tekst met de statement
            $stmt->bindParam(":studentID", $param_studentID, PDO::PARAM_STR);

            // Set parameters
            $param_studentID = trim($_POST["studentID"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $studentID_err = "Er is al een account gekoppeld aan dit studentnummer.";
                } else{
                    $studentID = trim($_POST["studentID"]);
                }
            } else{
                echo "Oeps! Er is iets verkeerd gegaan. Probeer het later nog eens.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Validate wachtwoord
    if(empty(trim($_POST["wachtwoord"]))){
        $wachtwoord_err = "Voer een wachtwoord in.";
    } elseif(strlen(trim($_POST["wachtwoord"])) < 6){
        $wachtwoord_err = "Het wachtwoord moet temniste uit 6 karakters bestaan.";
    } else{
        $wachtwoord = trim($_POST["wachtwoord"]);
    }

    // Validate herhaal wachtwoord
    if(empty(trim($_POST["herhaal_wachtwoord"]))){
        $herhaal_wachtwoord_err = "Herhaal je wachtwoord.";
    } else{
        $herhaal_wachtwoord = trim($_POST["herhaal_wachtwoord"]);
        if(empty($wachtwoord_err) && ($wachtwoord != $herhaal_wachtwoord)){
            $herhaal_wachtwoord_err = "Wachtwoorden zijn niet hetzelfde.";
        }
    }

    // Check input errors before inserting in database
    if(empty($studentID_err) && empty($wachtwoord_err) && empty($herhaal_wachtwoord_err)){


        // Prepare an insert statement
        $sql = "INSERT INTO users (studentID, wachtwoord) VALUES (:studentID, :wachtwoord)";

        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":studentID", $param_studentID, PDO::PARAM_STR);
            $stmt->bindParam(":wachtwoord", $param_wachtwoord, PDO::PARAM_STR);

            // Set parameters
            $param_studentID = $studentID;
            $param_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT); // Genereerd een password hash (veilige code)

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Er is iets fout gegaan. Probeer het later nog eens.";
            }

            // Close statement
            unset($stmt);
        }
    }
    // Close connection
    unset($pdo);
}