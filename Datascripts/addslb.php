<?php
    include "../DataBase/connectToDatabase.php";
    session_start();
    
    
    if (isset($_POST['naamstud'], $_POST['studnum'], $_POST['studopl'], $_POST['datmeldingstudbeg'], $_POST['dateinde'],
        $_POST['duuromst'], $_POST['maxecs'], $_POST['behecs'], $_POST['progressecs'], $_POST['tebehecs'],
        $_POST['maandennodig'], $_POST['jaar1'],$_POST['jaar2'],$_POST['jaar3'],$_POST['jaar4'],$_POST['jaar5'],
        $_POST['jaar6'],$_POST['jaar7'],$_POST['ec1'],$_POST['ec2'],$_POST['ec3'],$_POST['ec4'], $_POST['ec5'],
        $_POST['ec6'],$_POST['ec7'], $_POST['regeling'], $_POST['extrainfo'], $_POST['naam'], $_POST['functie']))
    {
        $id = $_SESSION['ID'];
        $naam_student = $_POST['naamstud'];
        $studentnummer = $_POST['studnum'];
        $opleiding = $_POST['studopl'];
        $begindatum= $_POST['datmeldingstudbeg'];
        $einddatum= $_POST['dateinde'];
        $duur = $_POST['duuromst'];
        $ec_mogelijk= $_POST['maxecs'];
        $ec_behaald = $_POST['behecs'];
        $ec_totaal = $_POST['progressecs'];
        $ec_nog_nodig = $_POST['tebehecs'];
        $tijd_nodig= $_POST['maandennodig'];
        $jaar1 = $_POST['jaar1'];
        $jaar2 = $_POST['jaar2'];
        $jaar3 = $_POST['jaar3'];
        $jaar4 = $_POST['jaar4'];
        $jaar5 = $_POST['jaar5'];
        $jaar6 = $_POST['jaar6'];
        $jaar7 = $_POST['jaar7'];
        $ec1 = $_POST['ec1'];
        $ec2 = $_POST['ec2'];
        $ec3 = $_POST['ec3'];
        $ec4 = $_POST['ec4'];
        $ec5 = $_POST['ec5'];
        $ec6 = $_POST['ec6'];
        $ec7 = $_POST['ec7'];
        $mogelijkheden_gezakt = $_POST['regeling'];
        $extra_info = $_POST['extrainfo'];
        $naam_slb= $_POST['naam'];
        $functie_slb= $_POST['functie'];

        
        $sql = "INSERT INTO slb(id, naam_student, studentnummer, opleiding, begindatum, einddatum, duur, ec_mogelijk,
                ec_behaald, ec_totaal, ec_nog_nodig, tijd_nodig, mogelijkheden_gezakt, extra_info, naam_slb, functie_slb)
                value (:id, :naam_student, :studentnummer, :opleiding, :begindatum, :einddatum, :duur, :ec_mogelijk,
                :ec_behaald, :ec_totaal, :ec_nog_nodig, :tijd_nodig, :mogelijkheden_gezakt, :extra_info, :naam_slb, :functie_slb);
                
                INSERT INTO studievoortgang(id, ec_jaar1, jaar1, ec_jaar2, jaar2, ec_jaar3, jaar3, ec_jaar4, jaar4, ec_jaar5, jaar5, ec_jaar6, jaar6, ec_jaar7, jaar7)
                values (:id, :ec_jaar1, :jaar1, :ec_jaar2, :jaar2, :ec_jaar3, :jaar3, :ec_jaar4, :jaar4, :ec_jaar5, :jaar5, :ec_jaar6, :jaar6, :ec_jaar7, :jaar7)
                ";
               
        if ($stmt = $conn->prepare($sql))
        {
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            $stmt->bindParam(":naam_student", $param_naam_student, PDO::PARAM_STR);
            $stmt->bindParam(":studentnummer", $param_studentnummer, PDO::PARAM_INT);
            $stmt->bindParam(":opleiding", $param_opleiding, PDO::PARAM_STR);
            $stmt->bindParam(":begindatum", $param_begindatum, PDO::PARAM_STR);
            $stmt->bindParam(":einddatum", $param_einddatum, PDO::PARAM_STR);
            $stmt->bindParam(":duur", $param_duur, PDO::PARAM_STR);
            $stmt->bindParam(":ec_mogelijk", $param_ec_mogelijk, PDO::PARAM_STR);
            $stmt->bindParam(":ec_behaald", $param_ec_behaald, PDO::PARAM_STR);
            $stmt->bindParam(":ec_totaal", $param_ec_totaal, PDO::PARAM_STR);
            $stmt->bindParam(":ec_nog_nodig", $param_ec_nog_nodig, PDO::PARAM_STR);
            $stmt->bindParam(":tijd_nodig", $param_tijd_nodig, PDO::PARAM_STR);
            $stmt->bindParam(":mogelijkheden_gezakt", $param_mogelijkheden_gezakt, PDO::PARAM_STR);
            $stmt->bindParam(":extra_info", $param_advies_duur, PDO::PARAM_STR);
            $stmt->bindParam(":naam_slb", $param_naam_slb, PDO::PARAM_STR);
            $stmt->bindParam(":functie_slb", $param_functie_slb, PDO::PARAM_STR);
        
            $param_id = $id;
            $param_naam_student = $naam_student;
            $param_studentnummer = $studentnummer;
            $param_opleiding = $opleiding;
            $param_begindatum = $begindatum;
            $param_einddatum = $einddatum;
            $param_duur = $duur;
            $param_ec_mogelijk = $ec_mogelijk;
            $param_ec_behaald = $ec_behaald;
            $param_ec_totaal = $ec_totaal;
            $param_ec_nog_nodig = $ec_nog_nodig;
            $param_tijd_nodig = $tijd_nodig;
            $param_mogelijkheden_gezakt = $mogelijkheden_gezakt;
            $param_advies_duur = $extra_info;
            $param_naam_slb = $naam_slb;
            $param_functie_slb = $functie_slb;
    
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar1", $param_ec_jaar1, PDO::PARAM_INT);
            $stmt->bindParam(":jaar1", $param_jaar1, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar2", $param_ec_jaar2, PDO::PARAM_INT);
            $stmt->bindParam(":jaar2", $param_jaar2, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar3", $param_ec_jaar3, PDO::PARAM_INT);
            $stmt->bindParam(":jaar3", $param_jaar3, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar4", $param_ec_jaar4, PDO::PARAM_INT);
            $stmt->bindParam(":jaar4", $param_jaar4, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar5", $param_ec_jaar5, PDO::PARAM_INT);
            $stmt->bindParam(":jaar5", $param_jaar5, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar6", $param_ec_jaar6, PDO::PARAM_INT);
            $stmt->bindParam(":jaar6", $param_jaar6, PDO::PARAM_INT);
            $stmt->bindParam(":ec_jaar7", $param_ec_jaar7, PDO::PARAM_INT);
            $stmt->bindParam(":jaar7", $param_jaar7, PDO::PARAM_INT);
    
            $param_id = $id;
            $param_ec_jaar1 = $jaar1;
            $param_ec_jaar2 = $jaar2;
            $param_ec_jaar3 = $jaar3;
            $param_ec_jaar4 = $jaar4;
            $param_ec_jaar5 = $jaar5;
            $param_ec_jaar6 = $jaar6;
            $param_ec_jaar7 = $jaar7;
            $param_jaar1 = $ec1;
            $param_jaar2 = $ec2;
            $param_jaar3 = $ec3;
            $param_jaar4 = $ec4;
            $param_jaar5 = $ec5;
            $param_jaar6 = $ec6;
            $param_jaar7 = $ec7;
    
    
            $ID = $_SESSION["ID"];
            if ($stmt->execute())
            {
                $sql = "UPDATE slb SET ingevuld = 'ja' WHERE id = :ID";
                if ($stmt = $conn->prepare($sql)) {
                    $stmt->bindParam(":ID", $ID, PDO::PARAM_INT);
                    if ($stmt->execute()) {
                        // Stuur door naar omstandighedengegevens
                        header("Location: ../dashboard.php");
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
