<?php
session_start();
include "../DataBase/connectToDatabase.php";
$ID = $_SESSION["ID"];

$sql = "UPDATE users SET aanvraag_num = NULL WHERE ID = :ID ";
if($stmt = $conn->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);

    // Set parameters
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Redirect to login page
        header("location: ../dashboard.php");
    } else{
        echo "Er is iets fout gegaan. Probeer het later nog eens.";
    }

    // Close statement
    unset($stmt);
}
