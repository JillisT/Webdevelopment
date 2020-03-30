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
$gebruikersnaam = $wachtwoord = $herhaal_wachtwoord = $type = "";
$gebruikersnaam_err = $wachtwoord_err = $herhaal_wachtwoord_err = "";

// Wanneer er op aanmelden is gedrukt
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Kijken of er iets in de email veld is ingevoerd
    if(empty(trim($_POST["gebruikersnaam"]))){
        $gebruikersnaam_err = "Voer een gebruikersnaam in.";
    } else{
        // SELECT statement aanmaken
        $sql = "SELECT ID FROM users WHERE gebruikersnaam = :gebruikersnaam";

        if($stmt = $conn->prepare($sql)){
            // Verbind de ingevoerde tekst met de statement
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);

            // Set parameters
            $param_gebruikersnaam = trim($_POST["gebruikersnaam"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $gebruikersnaam_err = "Er is al een account gekoppeld aan deze gebruikersnaam.";
                } else{
                    $gebruikersnaam = filter_var($_POST['gebruikersnaam'], FILTER_SANITIZE_STRING);
                }
            } else{
                echo "Oeps! Er is iets verkeerd gegaan. Probeer het later nog eens.";
            }
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

    //Set account type
    $type = $_POST["type"];
    if($type = "student"){
        $type = "student";
    } else if ($type = "SLBer"){
        $type = "SLBer";
    }else $type = "decaan";

    // Check input errors before inserting in database
    if(empty($gebruikersnaam_err) && empty($wachtwoord_err) && empty($herhaal_wachtwoord_err)){


        // Prepare an insert statement
        $sql = "INSERT INTO users (gebruikersnaam, wachtwoord, type) VALUES (:gebruikersnaam, :wachtwoord, :type)";

        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);
            $stmt->bindParam(":wachtwoord", $param_wachtwoord, PDO::PARAM_STR);
            $stmt->bindParam(":type", $param_type, PDO::PARAM_STR);

            // Set parameters
            $param_gebruikersnaam = $gebruikersnaam;
            $param_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT); // Genereerd een password hash (veilige code)
            $param_type = $type;

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