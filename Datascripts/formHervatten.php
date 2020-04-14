<?php
include "../DataBase/connectToDatabase.php";
// Persoonlijke
session_start();
$id = $_SESSION["ID"];
// controlleer student form
$sql = "SELECT id, ingevuld FROM student where ingevuld = 'ja'";
$result = $conn->query($sql);
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if ($row["id"] === $id && $row["ingevuld"] === 'ja') {

            // controlleer opleiding form
            $sql = "SELECT id, ingevuld FROM opleiding where ingevuld = 'ja'";
            $result = $conn->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    if ($row["id"] === $id && $row["ingevuld"] === 'ja') {

                        // controlleer omstandigheden form
                        $sql = "SELECT id, ingevuld FROM omstandigheden where ingevuld = 'ja'";
                        $result = $conn->query($sql);
                        if ($result->rowCount() > 0) {
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                if ($row["id"] === $id && $row["ingevuld"] === 'ja') {
                                    header("location: ../dashboard.php");

                                }
                            }
                        } else header("location: ../vragenform/omstandighedengegevens.php");
                    }
                }
            } else header("location: ../vragenform/opleidingsgegevens.php");
        }
    }
} else     header("location: ../vragenform/persoonsgegevens.php");