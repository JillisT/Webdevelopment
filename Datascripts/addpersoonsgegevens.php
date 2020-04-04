<?php
include "../DataBase/connectToDatabase.php";
session_start();


if (isset($_POST['studentnum'], $_POST['achternaam'], $_POST['roepnaam'], $_POST['klas'], $_POST['geboortedatum'], $_POST['adres'], $_POST['telnummer'], $_POST['email'], $_POST['bsn'], $_POST['IBAN']))
{
    $studentnum = $_POST['studentnum'];
    $achternaam = $_POST['achternaam'];
    $roepnaam = $_POST['roepnaam'];
    $klassennaam = $_POST['klas'];
    $geboortedatum = $_POST['geboortedatum'];
    $adres = $_POST['adres'];
    $telefoonnummer= $_POST['telnummer'];
    $email= $_POST['email'];
    $bsn = $_POST['bsn'];
    $iban= $_POST['IBAN'];

    
    $sql = "INSERT INTO student(studentnummer, achternaam, roepnaam, klassennaam, geboortedatum, adres, telefoonnummer, email, bsn, iban)
            value (:studentnum,:achternaam, :roepnaam, :klassennaam, :geboortedatum, :adres, :telefoonnummer, :email, :bsn, :iban)";

    if ($stmt = $conn->prepare($sql))
    {
        $stmt->bindParam(":studentnum", $param_studentnum, PDO::PARAM_INT);
        $stmt->bindParam(":achternaam", $param_achternaam, PDO::PARAM_STR);
        $stmt->bindParam(":roepnaam", $param_roepnaam, PDO::PARAM_STR);
        $stmt->bindParam(":klassennaam", $param_klassennaam, PDO::PARAM_STR);
        $stmt->bindParam(":geboortedatum", $param_geboortedatum, PDO::PARAM_STR);
        $stmt->bindParam(":adres", $param_adres, PDO::PARAM_STR);
        $stmt->bindParam(":telefoonnummer", $param_telefoonnummer, PDO::PARAM_INT);
        $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
        $stmt->bindParam(":bsn", $param_bsn, PDO::PARAM_INT);
        $stmt->bindParam(":iban", $param_iban, PDO::PARAM_STR);
        
        $param_studentnum = $studentnum;
        $param_achternaam = $achternaam;
        $param_roepnaam = $roepnaam;
        $param_klassennaam = $klassennaam;
        $param_geboortedatum = $geboortedatum;
        $param_adres =$adres;
        $param_telefoonnummer = $telefoonnummer;
        $param_email = $email;
        $param_bsn = $bsn;
        $param_iban = $iban;
        

        if ($stmt->execute())
        {
            // Stuur door naar opleidingsgegevens
            header("Location: ../opleidingsgegevens.php");
        }
        else
        {
            echo "Er is iets fout gegaan. Probeer het later nog eens.";
        }
        // Close statement
        unset($stmt);
    }

// Close connection
    unset($pdo);
}
