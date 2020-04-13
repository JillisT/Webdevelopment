<?php
//    session_start();
//    if(!isset($_SESSION["loggedin"])){
//        header("location: index.php");
//    }
//    if($_SESSION["type"] === "admin" ){
//        header("location: ovezichtAanvragen.php");
//    }
//    require "include/stylesheets.php";
//    include "DataBase/connectToDatabase.php";
//?>

<?php
$ID = $_SESSION["ID"];
$studentnummer= "";
$achternaam= "";
    $roepnaam= "";
    $klassennaam= "";
    $geboortedatum= "";
    $adres= "";
    $telefoonnummer = "";
    $email= "";
    $bsn= "";
    $iban= "";
    $ingeschreven       ="";
    $opleiding2          = "";
    $opleidingsvariant  = "";
    $startjaar          = "";
    $studiejaar         = "";
    $onderbroken        = "";
    $uitgeschreven      = "";
    $andere_studie      = "";
    $naam_andere_studie = "";
    $reden              = "";
    $studievertraging           = "";
    $duo_stelsel                = "";
    $recht_extra_financiering   = "";
    $financiering_ingegaan      = "";
    $aanvraag_duur              = "";
    $ondersteuning_gehad        = "";
    $ondersteuning_duur         = "";
    $ondersteuning_jaar         = "";
    $toelichting                = "";
    $begin_probleem             = "";
    $melding_decaan             = "";
    $melding_slb                = "";
    $afmelding_decaan           = "";
    $afmelding_slb              = "";
    $studieonderdelen           = "";
    $duur_vertraging            = "";
    $invloed_omstandigheden     = "";
    $beperken_omstandigheden    = "";
    
$sql = "SELECT aanvraag_num FROM users WHERE ID = :ID";

$num = "";
    if($result = $conn->prepare($sql))
    {
        // Bind variables to the prepared statement as parameters
        $result->bindParam(":ID", $ID, PDO::PARAM_INT);
    
        // Attempt to execute the prepared statement
        if ($result->execute())
        {
            if ($result->rowCount() > 0)
            {
                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                    $num = $row["aanvraag_num"];
                }
            } else
            {
                echo "Er is iets fout gegaan. Probeer het later nog eens 1.";
            }
        
            // Close statement
            unset($stmt);
        }
        //Data uit student database halen
        $student = "SELECT * FROM student WHERE id =:ID";
        if ($result = $conn->prepare($student))
        {
            // Bind variables to the prepared statement as parameters
            $result->bindParam(":ID", $ID, PDO::PARAM_INT);
        
            // Attempt to execute the prepared statement
            if ($result->execute())
            {
                if ($result->rowCount() > 0)
                {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        $studentnummer = $row["studentnummer"];
                        $achternaam = $row["achternaam"];
                        $roepnaam = $row["roepnaam"];
                        $klassennaam = $row["klassennaam"];
                        $geboortedatum = $row["geboortedatum"];
                        $adres = $row["studentnummer"];
                        $telefoonnummer = $row["telefoonnummer"];
                        $email = $row["email"];
                        $bsn = $row["studentnummer"];
                        $iban = $row["studentnummer"];
                    }
                }
//                else
//                {
//                    echo "Er is iets fout gegaan. Probeer het later nog eens 2.";
//                }
            
                // Close statement
                unset($stmt);
            }
            $opleiding = "SELECT * FROM opleiding where id =:ID";
            if ($result = $conn->prepare($opleiding))
            {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);
            
                // Attempt to execute the prepared statement
                if ($result->execute())
                {
                    if ($result->rowCount() > 0)
                    {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            $ingeschreven = $row["ingeschreven"];
                            $opleiding2 = $row["opleiding"];
                            $opleidingsvariant = $row["opleidingsvariant"];
                            $startjaar = $row["startjaar"];
                            $studiejaar = $row["studiejaar"];
                            $onderbroken = $row["onderbroken"];
                            $uitgeschreven = $row["uitgeschreven"];
                            $andere_studie = $row["andere_studie"];
                            $naam_andere_studie = $row["naam_andere_studie"];
                            $reden = $row["reden"];
                        }
                    }
                } else
                {
                    echo "Er is iets fout gegaan. Probeer het later nog eens 3.";
                }
            
                // Close statement
                unset($stmt);
            }
            $omstandigheden = "SELECT * FROM omstandigheden where id =:ID";
            if ($result = $conn->prepare($omstandigheden))
            {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);
            
                // Attempt to execute the prepared statement
                if ($result->execute())
                {
                    if ($result->rowCount() > 0)
                    {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            $studievertraging = $row["studievertraging"];
                            $duo_stelsel = $row["duo_stelsel"];
                            $recht_extra_financiering = $row["recht_extra_financiering"];
                            $financiering_ingegaan = $row["financiering_ingegaan"];
                            $aanvraag_duur = $row["aanvraag_duur"];
                            $ondersteuning_gehad = $row["ondersteuning_gehad"];
                            $ondersteuning_duur = $row["ondersteuning_duur"];
                            $ondersteuning_jaar = $row["ondersteuning_jaar"];
                            $toelichting = $row["toelichting"];
                            $begin_probleem = $row["begin_probleem"];
                            $melding_decaan = $row["melding_decaan"];
                            $melding_slb = $row["melding_slb"];
                            $afmelding_decaan = $row["afmelding_decaan"];
                            $afmelding_slb = $row["afmelding_slb"];
                            $studieonderdelen = $row["studieonderdelen"];
                            $duur_vertraging = $row["duur_vertraging"];
                            $invloed_omstandigheden = $row["invloed_omstandigheden"];
                            $beperken_omstandigheden = $row["beperken_omstandigheden"];
                        }
                    }
                } else
                {
                    echo "Er is iets fout gegaan. Probeer het later nog eens 3.";
                }
            
                // Close statement
                unset($stmt);
            }
        }
    }
    ?>