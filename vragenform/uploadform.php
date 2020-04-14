<html>
<head>
    <?php
        include "../DataBase/connectToDatabase.php";
        session_start();
        require "../include/stylesheets.php";
        
    
        $id = $_SESSION["ID"];
    
        $sql1= "SELECT studentnummer FROM student WHERE id =:ID";
        if ($result = $conn->prepare($sql1)) {
            // Bind variables to the prepared statement as parameters
            $result->bindParam(":ID", $id, PDO::PARAM_INT);
        
            // Attempt to execute the prepared statement
            if ($result->execute()) {
                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        $studentnummer = $row["studentnummer"];
                    }
                }
                else $studentnummer = "Onbekend";
            } else {
                echo "Er is iets fout gegaan. Probeer het later nog eens.";
            }
        
            // Close statement
            unset($stmt);
        }
        
        $sql2= "SELECT reden FROM opleiding WHERE id =:ID";
        if ($result = $conn->prepare($sql2)) {
            // Bind variables to the prepared statement as parameters
            $result->bindParam(":ID", $id, PDO::PARAM_INT);
        
            // Attempt to execute the prepared statement
            if ($result->execute()) {
                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        $reden = $row["reden"];
                    }
                }
                else $studentnummer = "Onbekend";
            } else {
                echo "Er is iets fout gegaan. Probeer het later nog eens.";
            }
        
            // Close statement
            unset($stmt);
        }

    if(isset($_FILES['arts']))
    {
        $errors = array();
        $file_name = $_FILES['arts']['name'];
        $file_size = $_FILES['arts']['size'];
        $file_tmp = $_FILES['arts']['tmp_name'];
        $file_type = $_FILES['arts']['type'];
        $extension  = pathinfo( $_FILES["arts"]["name"], PATHINFO_EXTENSION ); // jpg
        $naam = $studentnummer. '.' . 'arts' . '.' . $extension;
    
        move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
    }
        if(isset($_FILES['duofin']))
        {
            $errors = array();
            $file_name = $_FILES['duofin']['name'];
            $file_size = $_FILES['duofin']['size'];
            $file_tmp = $_FILES['duofin']['tmp_name'];
            $file_type = $_FILES['duofin']['type'];
            $extension  = pathinfo( $_FILES["duofin"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'duofin' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['duoaan']))
        {
            $errors = array();
            $file_name = $_FILES['duoaan']['name'];
            $file_size = $_FILES['duoaan']['size'];
            $file_tmp = $_FILES['duoaan']['tmp_name'];
            $file_type = $_FILES['duoaan']['type'];
            $extension  = pathinfo( $_FILES["duoaan"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'duoaan' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['studieplan']))
        {
            $errors = array();
            $file_name = $_FILES['studieplan']['name'];
            $file_size = $_FILES['studieplan']['size'];
            $file_tmp = $_FILES['studieplan']['tmp_name'];
            $file_type = $_FILES['studieplan']['type'];
            $extension  = pathinfo( $_FILES["studieplan"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'studieplan' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['studiepunten']))
        {
            $errors = array();
            $file_name = $_FILES['studiepunten']['name'];
            $file_size = $_FILES['studiepunten']['size'];
            $file_tmp = $_FILES['studiepunten']['tmp_name'];
            $file_type = $_FILES['studiepunten']['type'];
            $extension  = pathinfo( $_FILES["studiepunten"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'studiepunten' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['gebkaart']))
        {
            $errors = array();
            $file_name = $_FILES['gebkaart']['name'];
            $file_size = $_FILES['gebkaart']['size'];
            $file_tmp = $_FILES['gebkaart']['tmp_name'];
            $file_type = $_FILES['gebkaart']['type'];
            $extension  = pathinfo( $_FILES["gebkaart"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'gebkaart' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['medisch']))
        {
            $errors = array();
            $file_name = $_FILES['medisch']['name'];
            $file_size = $_FILES['medisch']['size'];
            $file_tmp = $_FILES['medisch']['tmp_name'];
            $file_type = $_FILES['medisch']['type'];
            $extension  = pathinfo( $_FILES["medisch"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'medisch' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
        if(isset($_FILES['studeerbaar']))
    {
        $errors = array();
        $file_name = $_FILES['studeerbaar']['name'];
        $file_size = $_FILES['studeerbaar']['size'];
        $file_tmp = $_FILES['studeerbaar']['tmp_name'];
        $file_type = $_FILES['studeerbaar']['type'];
        $extension  = pathinfo( $_FILES["studeerbaar"]["name"], PATHINFO_EXTENSION ); // jpg
        $naam = $studentnummer. '.' . 'studeerbaar' . '.' . $extension;
    
        move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
    }
        if(isset($_FILES['topsport']))
        {
            $errors = array();
            $file_name = $_FILES['topsport']['name'];
            $file_size = $_FILES['topsport']['size'];
            $file_tmp = $_FILES['topsport']['tmp_name'];
            $file_type = $_FILES['topsport']['type'];
            $extension  = pathinfo( $_FILES["topsport"]["name"], PATHINFO_EXTENSION ); // jpg
            $naam = $studentnummer. '.' . 'topsport' . '.' . $extension;
        
            move_uploaded_file($file_tmp, "../Bestanden/" . $naam);
        }
    
    
?>
    
    

    
    <title>Uploaden</title>
</head>
<body>


<!-- row start -->
<div class="row">
    <!-- white space rechts -->
    <div class="col-lg-2"></div>
    
    <!-- body start -->
    <div class="col-lg-8">
        
        <!-- container body start -->
        <div class="container-fluid">
            
            <?php
                require "NavBarVragen.php";
            ?>
            <!--login table start-->
            
            <form action="" method="POST" enctype="multipart/form-data">
    
                <?php
                    if($reden == "1" || $reden == "3"){
                    ?>
                <label> Verklaring van een arts, een andere hulpverlener of bewijs uit medisch dossier.
                    Informatie die voor de aanvraag niet van belang is, mag worden afgeschermd.</label><br>
                <input type="file" name="arts" />
                <br>
                <?php } ?>
                <?php
                    if($reden == "1"|| $reden == "3" ){
                ?>
                <label>Bericht van afwijzing of toekenning door DUO van een extra jaar studiefinanciering. </label><br>
                <input type="file" name="duofin" />
                <br> <?php } ?>
                <?php
                    if($reden == "1" || $reden == "3") {
                ?>
                <label> Leenfase: screenshot/print waaruit blijkt wat je van DUO ontvangt (aanvullende
                    beurs is hierbij van belang)</label><br>
                <input type="file" name="duoaan" />
                <br><?php } ?>
                <label> Studieplan </label><br>
                <input type="file" name="studieplan" />
                <br>
                <label> Uitdraai van de behaalde studiepunten (bijv. uit ProgressWWW). </label><br>
                <input type="file" name="studiepunten" />
                <br>
                <?php
                    if($reden == "2"){
                ?>
                <label> Schriftelijk bewijsstuk (bijv. geboortekaartje) </label><br>
                <input type="file" name="gebkaart" />
                <br><?php } ?>
                <?php
                    if($reden ==  "4"){
                ?>
                <label> Schriftelijke bewijsstukken (bijv. verklaring van hulpverlener of familieleden. Of
                    bewijsstuk uit een (medisch) dossier. Informatie die voor de aanvraag niet van belang
                        is, mag worden afgeschermd. Bij overlijden van een familielid volstaat een scan van
                    de rouwkaart.)</label><br>
                <input type="file" name="medisch" />
                <br><?php } ?>
                <?php
                    if($reden == "5" ){
                ?>
                <label> Bewijsstukken (bijvoorbeeld mailwisselingen, brieven) of een verklaring (van docent,
                    teamleider, directeur) waaruit blijkt dat de studie onvoldoende studeerbaar is.</label><br>
                <input type="file" name="studeerbaar" />
                <br><?php } ?>
                <?php
                    if($reden == "6" ) {
                ?>
                <label> Bewijs van erkenning van de topsport status. </label><br>
                <input type="file" name="topsport" />
                <br><?php } ?>
                <br>
                <input type="submit" class="btn btn-success" value = "Opslaan" />
            </form>
            
            <b> Sla eerst op en ga dan pas naar volgende!</b> <br> <br>

            <a href="../dashboard.php" class="btn btn-primary">Volgende</a>
            <!--login table end-->
        
        </div>
        <!-- continer body end -->
    
    </div>
    <!-- body end -->
    
    <!-- white space links -->
    <div class="col-lg-2"></div>
</div>
<!-- row end -->
</body>
</html>