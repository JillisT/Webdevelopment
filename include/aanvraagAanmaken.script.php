<?php
session_start();
include "../DataBase/connectToDatabase.php";
$ID = $aanvraag_num = "";

$ID = $_SESSION["ID"];
$aanvraag_num = uniqid();

$sql = "UPDATE users SET aanvraag_num = :aanvraag_num  WHERE ID = :ID ";
if($stmt = $conn->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":aanvraag_num", $param_aanvraag_num, PDO::PARAM_STR);
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);

    // Set parameters
    $param_aanvraag_num = $aanvraag_num;
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Redirect to login page
        header("location: ../vragenform/persoonsgegevens.php");
    } else{
        echo "Er is iets fout gegaan. Probeer het later nog eens.";
    }

    // Close statement
    unset($stmt);
}
