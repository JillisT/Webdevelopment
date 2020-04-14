<?php
    
    include "../DataBase/connectToDatabase.php";
    session_start();
    
    
    if (isset($_FILES['dokverklaring']))
    {
        $errors = array();
        $file_name = $_FILES['dokverklaring']['name'];
        $file_size = $_FILES['dokverklaring']['size'];
        $file_tmp = $_FILES['dokverklaring']['tmp_name'];
        $file_type = $_FILES['dokverklaring']['type'];
        $extension = pathinfo($_FILES["dokverklaring"]["name"], PATHINFO_EXTENSION); // jpg
        $naam = "Dokterverklaring" . '.' . $extension;
        
        move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
    }
    
    
    if (isset($_POST['inschrijving'], $_POST['opleiding'], $_POST['opleidingvar'], $_POST['startdatum'], $_POST['studiejaar'],
              $_POST['onderbr'], $_POST['uitschr'], $_POST['andereopl'], $_POST['andereopl2'], $_POST['studvertr']))
    {
        $id = $_SESSION['ID'];
        $ingeschreven = $_POST['inschrijving'];
        $opleiding = $_POST['opleiding'];
        $opleidingsvariant= $_POST['opleidingvar'];
        $startjaar= $_POST['startdatum'];
        $studiejaar = $_POST['studiejaar'];
        $onderbroken = $_POST['onderbr'];
        $uitgeschreven = $_POST['uitschr'];
        $andere_studie = $_POST['andereopl'];
        $naam_andere_studie= $_POST['andereopl2'];
        $reden = $_POST['studvertr'];
    
        $sql = "INSERT INTO opleiding(id, ingeschreven, opleiding, opleidingsvariant, startjaar, studiejaar, onderbroken, uitgeschreven, andere_studie, naam_andere_studie, reden)
            value (:id, :ingeschreven, :opleiding, :opleidingsvariant, :startjaar, :studiejaar, :onderbroken, :uitgeschreven, :andere_studie, :naam_andere_studie, :reden)";
        
        
            
        if ($stmt = $conn->prepare($sql))
        {
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            $stmt->bindParam(":ingeschreven", $param_ingeschreven, PDO::PARAM_STR);
            $stmt->bindParam(":opleiding", $param_opleiding,PDO::PARAM_STR);
            $stmt->bindParam(":opleidingsvariant", $param_opleidingsvariant, PDO::PARAM_STR);
            $stmt->bindParam(":startjaar", $param_startjaar, PDO::PARAM_INT);
            $stmt->bindParam(":studiejaar", $param_studiejaar, PDO::PARAM_STR);
            $stmt->bindParam(":onderbroken", $param_onderbroken, PDO::PARAM_STR);
            $stmt->bindParam(":uitgeschreven", $param_uitgeschreven, PDO::PARAM_STR);
            $stmt->bindParam(":andere_studie", $param_andere_studie, PDO::PARAM_STR);
            $stmt->bindParam(":naam_andere_studie", $param_naam_andere_studie, PDO::PARAM_STR);
            $stmt->bindParam(":reden", $param_reden, PDO::PARAM_STR);
    
            $param_id = $id;
            $param_ingeschreven = $ingeschreven;
            $param_opleiding= $opleiding;
            $param_opleidingsvariant = $opleidingsvariant;
            $param_startjaar = $startjaar;
            $param_studiejaar = $studiejaar;
            $param_onderbroken = $onderbroken;
            $param_uitgeschreven = $uitgeschreven;
            $param_andere_studie = $andere_studie;
            $param_naam_andere_studie = $naam_andere_studie;
            $param_reden = $reden;


            $ID = $_SESSION["ID"];
            if ($stmt->execute())
            {
                $sql = "UPDATE opleiding SET ingevuld = 'ja' WHERE id = :ID";
                if ($stmt = $conn->prepare($sql)) {
                    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
                    if ($stmt->execute()) {
                        // Stuur door naar omstandighedengegevens
                        header("Location: ../vragenform/omstandighedengegevens.php");
                    }
                }

            } else
            {
                echo "Er is iets fout gegaan. Probeer het later nog eens.";
            }
            // Close statement
            unset($stmt);
        }

// Close connection
        unset($pdo);
    }
