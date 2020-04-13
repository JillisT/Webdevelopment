<?php
session_start();
include "../DataBase/connectToDatabase.php";
$ID="";
$ID = $_SESSION["ID"];

$sql = "UPDATE users SET aanvraag_num = NULL WHERE ID = :ID ";
if ($stmt = $conn->prepare($sql)) {
    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {

        //verwijderen omstandigheden gegevens
        $sql1 = "DELETE FROM omstandigheden WHERE id = :ID";
        if ($stmt1 = $conn->prepare($sql1)) {
            $stmt1->bindParam(":ID", $ID, PDO::PARAM_INT);
            if ($stmt1->execute()) {

                //verwijderen opleiding gegevens
                $sql2 = "DELETE FROM opleiding WHERE id = :ID";
                if ($stmt2 = $conn->prepare($sql2)) {
                    $stmt2->bindParam(":ID", $ID, PDO::PARAM_INT);
                    if ($stmt2->execute()) {

                        //verwijderen student gegevens
                        $sql3 = "DELETE FROM student WHERE id = :ID";
                        if ($stmt3 = $conn->prepare($sql3)) {
                            $stmt3->bindParam(":ID", $ID, PDO::PARAM_INT);
                            if ($stmt3->execute()) {

                                // Redirect to dashboard page
                                header("location: ../dashboard.php");
                            }
                        }
                    }
                }
            }
        }
    } else {
        echo "Er is iets fout gegaan. Probeer het later nog eens.";
    }

// Close statement
    unset($stmt);
}
