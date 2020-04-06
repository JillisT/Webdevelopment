<?php
    
    include "../DataBase/connectToDatabase.php";
    session_start();
    
    
    if (isset($_POST['vertr'], $_POST['opleiding'], $_POST['inschrijving'], $_POST['extrafin'], $_POST['finstart'],
        $_POST['finanonderst'], $_POST['ondgehad'], $_POST['duurgehad'], $_POST['jaargehad'], $_POST['oorspr'],
        $_POST['onderbr'], $_POST['uitschr'], $_POST['andereopl'], $_POST['andereopl2'], $_POST['studvertr']))
    {
        $id = $_SESSION['ID'];
        $ingeschreven = $_POST['vertr'];
        $opleiding = $_POST['inschrijving'];
        $opleidingsvariant= $_POST['extrafin'];
        $startjaar= $_POST['finstart'];
        $studiejaar = $_POST['finanonderst'];
        $onderbroken = $_POST['ondgehad'];
        $uitgeschreven = $_POST['duurgehad'];
        $andere_studie = $_POST['jaargehad'];
        $naam_andere_studie= $_POST['oorspr'];
        $reden = $_POST['studvertr'];
        $onderbroken = $_POST['ondgehad'];
        $uitgeschreven = $_POST['duurgehad'];
        $andere_studie = $_POST['jaargehad'];
        $naam_andere_studie= $_POST['andereopl2'];
        $reden = $_POST['studvertr'];
    
            $sql = "INSERT INTO omstandigheden(id, studievertraging, duo_stelsel, recht_extra_financiering, financiering_ingegaan,
                           ondersteuning_gehad, ondersteuning_duur, ondersteuning_jaar, toelichting, wanneer, melding_decaan, melding_slb,
                           afmelding_decaan, afmelding_slb, studieonderdelen, duur_vertraging, invloed_omstandigheden, beperken_omstandigheden,
                           aanvraag_duur)
            value (:id, :studievertraging, :duo_stelsel, :recht_extra_financiering, :financiering_ingegaan,
                           :ondersteuning_gehad, :ondersteuning_duur, :ondersteuning_jaar, :toelichting, :wanneer, :melding_decaan, :melding_slb,
                           :afmelding_decaan, :afmelding_slb, :studieonderdelen, :duur_vertraging, :invloed_omstandigheden, :beperken_omstandigheden,
                           :aanvraag_duur)";
        
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
            $param_studiejaar = $studiejaar;
            $param_onderbroken = $onderbroken;
            $param_uitgeschreven = $uitgeschreven;
            $param_andere_studie = $andere_studie;
            $param_naam_andere_studie = $naam_andere_studie;
            $param_reden = $reden;
            
            
            if ($stmt->execute())
            {
                // Stuur door naar opleidingsgegevens
                header("Location: ../opleidingsgegevens.php");
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

