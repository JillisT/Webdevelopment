<?php
/*$studnum = "SELECT studentnummer FROM student WHERE id = :ID";
if ($result = $conn->prepare($studnum)) {
    $result->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($result->execute()) {
        echo $studnum;
    }
}*/

//Decaan input
$sql = "SELECT * FROM decaan WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        }
    }
}

//Omstandingheden input
$sql = "SELECT * FROM omstandigheden WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        }
    }
}

//Opleiding input
$sql = "SELECT * FROM opleiding WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        }
    }
}

//SLB input
$sql = "SELECT * FROM slb WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        }
    }
}

//Student input
$sql = "SELECT * FROM student WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $id = $row["id"];
            $studentnum = $row["studentnummer"];
            $achternaam = $row["achternaam"];
            $roepnaam = $row["roepnaam"];
            $klassennaam = $row["klassennaam"];
            $geboortedatum = $row["geboortedatum"];
            $adres = $row["adres"];
            $telefoonnummer = $row["telefonnummer"];
            $email = $row["email"];
            $bsn = $row["bsn"];
            $iban = $row["iban"];
        }
    }
}

//Studievoortgang input
$sql = "SELECT * FROM studievoortgang WHERE id = : ID";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        }
    }
}