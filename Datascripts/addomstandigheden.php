<?php
    
    include "../DataBase/connectToDatabase.php";
    session_start();
    
        if (isset($_POST['vertr'], $_POST['duo'],  $_POST['extrafin'], $_POST['finstart'], $_POST['finanonderst'],
        $_POST['ondgehad'], $_POST['duurgehad'], $_POST['jaargehad'],  $_POST['omstandig'],
        $_POST['beginom'], $_POST['eindeom'], $_POST['datumdec'], $_POST['datumstudbeg'], $_POST['datumdec2'],
        $_POST['datumstudbeg2'], $_POST['vertraging'], $_POST['vertragingduur'], $_POST['vertragingwijze'], $_POST['vertragingreductie']))
    {
        $id = $_SESSION['ID'];
        $studievertraging = $_POST['vertr'];
        $duo_stelsel= $_POST['duo'];
        $recht_extra_financiering= $_POST['extrafin'];
        $financiering_ingegaan = $_POST['finstart'];
        $aanvraag_duur = $_POST['finanonderst'];
        $ondersteuning_gehad = $_POST['ondgehad'];
        $ondersteuning_duur = $_POST['duurgehad'];
        $ondersteuning_jaar = $_POST['jaargehad'];
        $toelichting = $_POST['omstandig'];
        $begin_probleem = $_POST['beginom'];
        $einde_probleem = $_POST['eindeom'];
        $melding_decaan = $_POST['datumdec'];
        $melding_slb = $_POST['datumstudbeg'];
        $afmelding_decaan = $_POST['datumdec2'];
        $afmelding_slb = $_POST['datumstudbeg2'];
        $studieonderdelen= $_POST['vertraging'];
        $duur_vertraging = $_POST['vertragingduur'];
        $invloed_omstandigheden= $_POST['vertragingwijze'];
        $beperken_omstandigheden = $_POST['vertragingreductie'];
    
            $sql = "INSERT INTO omstandigheden(id, studievertraging, duo_stelsel, recht_extra_financiering, financiering_ingegaan, aanvraag_duur,
                           ondersteuning_gehad, ondersteuning_duur, ondersteuning_jaar, toelichting, begin_probleem, einde_probleem, melding_decaan, melding_slb,
                           afmelding_decaan, afmelding_slb, studieonderdelen, duur_vertraging, invloed_omstandigheden, beperken_omstandigheden)
                    value (:id, :studievertraging, :duo_stelsel, :recht_extra_financiering, :financiering_ingegaan, :aanvraag_duur,
                           :ondersteuning_gehad, :ondersteuning_duur, :ondersteuning_jaar, :toelichting, :begin_probleem, :einde_probleem, :melding_decaan, :melding_slb,
                           :afmelding_decaan, :afmelding_slb, :studieonderdelen, :duur_vertraging, :invloed_omstandigheden, :beperken_omstandigheden)";
        
        if ($stmt = $conn->prepare($sql))
        {
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            $stmt->bindParam(":studievertraging", $param_studievertraging, PDO::PARAM_INT);
            $stmt->bindParam(":duo_stelsel", $param_duo_stelsel,PDO::PARAM_STR);
            $stmt->bindParam(":recht_extra_financiering", $param_recht_extra_financiering, PDO::PARAM_STR);
            $stmt->bindParam(":financiering_ingegaan", $param_inanciering_ingegaan, PDO::PARAM_STR);
            $stmt->bindParam(":aanvraag_duur", $param_aanvraag_duur, PDO::PARAM_INT);
            $stmt->bindParam(":ondersteuning_gehad", $param_ondersteuning_gehad, PDO::PARAM_STR);
            $stmt->bindParam(":ondersteuning_duur", $param_ondersteuning_duur, PDO::PARAM_INT);
            $stmt->bindParam(":ondersteuning_jaar", $param_ondersteuning_jaar, PDO::PARAM_INT);
            $stmt->bindParam(":toelichting", $param_toelichting,PDO::PARAM_STR);
            $stmt->bindParam(":begin_probleem", $param_begin_probleem, PDO::PARAM_STR);
            $stmt->bindParam(":einde_probleem", $param_einde_probleem, PDO::PARAM_STR);
            $stmt->bindParam(":melding_decaan", $param_melding_decaan, PDO::PARAM_STR);
            $stmt->bindParam(":melding_slb", $param_melding_slb, PDO::PARAM_STR);
            $stmt->bindParam(":afmelding_decaan", $param_afmelding_decaan, PDO::PARAM_STR);
            $stmt->bindParam(":afmelding_slb", $param_afmelding_slb, PDO::PARAM_STR);
            $stmt->bindParam(":studieonderdelen", $param_studieonderdelen, PDO::PARAM_STR);
            $stmt->bindParam(":duur_vertraging", $param_duur_vertraging, PDO::PARAM_INT);
            $stmt->bindParam(":invloed_omstandigheden", $param_invloed_omstandigheden, PDO::PARAM_STR);
            $stmt->bindParam(":beperken_omstandigheden", $param_beperken_omstandigheden, PDO::PARAM_STR);
    
   
            $param_id = $id;
            $param_studievertraging = $studievertraging;
            $param_duo_stelsel = $duo_stelsel;
            $param_recht_extra_financiering = $recht_extra_financiering;
            $param_inanciering_ingegaan = $financiering_ingegaan;
            $param_aanvraag_duur = $aanvraag_duur;
            $param_ondersteuning_gehad = $ondersteuning_gehad;
            $param_ondersteuning_duur = $ondersteuning_duur;
            $param_ondersteuning_jaar = $ondersteuning_jaar;
            $param_toelichting = $toelichting;
            $param_begin_probleem = $begin_probleem;
            $param_einde_probleem = $einde_probleem;
            $param_melding_decaan = $melding_decaan;
            $param_melding_slb = $melding_slb;
            $param_afmelding_decaan = $afmelding_decaan;
            $param_afmelding_slb = $afmelding_slb;
            $param_studieonderdelen = $studieonderdelen;
            $param_duur_vertraging = $duur_vertraging;
            $param_invloed_omstandigheden = $invloed_omstandigheden;
            $param_beperken_omstandigheden = $beperken_omstandigheden;
            
    
            if ($stmt->execute())
            {
                // Stuur door naar opleidingsgegevens
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

