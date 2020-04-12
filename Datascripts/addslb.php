<?php
    include "../DataBase/connectToDatabase.php";
    session_start();
    
    
    if (isset($_POST['naamstud'], $_POST['studnum'], $_POST['studopl'], $_POST['datmeldingstudbeg'], $_POST['dateinde'],
        $_POST['duuromst'], $_POST['maxecs'], $_POST['behecs'], $_POST['progressecs'], $_POST['tebehecs'],
        $_POST['maandennodig'], $_POST['regeling'], $_POST['extrainfo'], $_POST['naam'], $_POST['functie']))
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
        $mogelijkheden_gezakt = $_POST['regeling'];
        $extra_info = $_POST['extrainfo'];
        $naam_slb= $_POST['naam'];
        $functie_slb= $_POST['functie'];

        
        $sql = "INSERT INTO slb(id, naam_student, studentnummer, opleiding, begindatum, einddatum, duur, ec_mogelijk,
                ec_behaald, ec_totaal, ec_nog_nodig, tijd_nodig, mogelijkheden_gezakt, extra_info, naam_slb, functie_slb)
                value (:id, :naam_student, :studentnummer, :opleiding, :begindatum, :einddatum, :duur, :ec_mogelijk,
                :ec_behaald, :ec_totaal, :ec_nog_nodig, :tijd_nodig, :mogelijkheden_gezakt, :extra_info, :naam_slb, :functie_slb)";
        
        
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
