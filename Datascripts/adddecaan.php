<?php
        include "../DataBase/connectToDatabase.php";
    session_start();
    
    
    if (isset($_POST['naamstud'], $_POST['studnum'], $_POST['studopl'], $_POST['studvertr'], $_POST['decaannaam'],
        $_POST['datmeldingdec'], $_POST['datbegin'], $_POST['dateinde'], $_POST['toelichting'], $_POST['advies']))
    {
        $id = $_SESSION['ID'];
        $naam_student = $_POST['naamstud'];
        $studentnummer = $_POST['studnum'];
        $opleiding = $_POST['studopl'];
        $omstandigheden = $_POST['studvertr'];
        $naam_decaan = $_POST['decaannaam'];
        $datum_melding = $_POST['datmeldingdec'];
        $begindatum = $_POST['datbegin'];
        $einddatum = $_POST['dateinde'];
        $toelichting = $_POST['toelichting'];
        $advies_duur = $_POST['advies'];

        $sql = "INSERT INTO decaan(id, naam_student, studentnummer, opleiding, omstandigheden, naam_decaan, datum_melding, begindatum, einddatum, toelichting, advies_duur)
            value (:id, :naam_student, :studentnummer, :opleiding, :omstandigheden, :naam_decaan, :datum_melding, :begindatum, :einddatum, :toelichting, :advies_duur)";
        
        
        if ($stmt = $conn->prepare($sql))
        {
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            $stmt->bindParam(":naam_student", $param_naam_student, PDO::PARAM_STR);
            $stmt->bindParam(":studentnummer", $param_studentnummer, PDO::PARAM_INT);
            $stmt->bindParam(":opleiding", $param_opleiding, PDO::PARAM_STR);
            $stmt->bindParam(":omstandigheden", $param_omstandigheden, PDO::PARAM_STR);
            $stmt->bindParam(":naam_decaan", $param_naam_decaan, PDO::PARAM_STR);
            $stmt->bindParam(":datum_melding", $param_datum_melding, PDO::PARAM_STR);
            $stmt->bindParam(":begindatum", $param_begindatum, PDO::PARAM_STR);
            $stmt->bindParam(":einddatum", $param_einddatum, PDO::PARAM_STR);
            $stmt->bindParam(":toelichting", $param_toelichting, PDO::PARAM_STR);
            $stmt->bindParam(":advies_duur", $param_advies_duur, PDO::PARAM_STR);
            
            $param_id = $id;
            $param_naam_student = $naam_student;
            $param_studentnummer = $studentnummer;
            $param_opleiding = $opleiding;
            $param_omstandigheden = $omstandigheden;
            $param_naam_decaan = $naam_decaan;
            $param_datum_melding = $datum_melding;
            $param_begindatum = $begindatum;
            $param_einddatum = $einddatum;
            $param_toelichting = $toelichting;
            $param_advies_duur = $advies_duur;

            
            
            if ($stmt->execute())
            {
                // Stuur door naar omstandighedengegevens
                header("Location: ../dashboard.php");
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
