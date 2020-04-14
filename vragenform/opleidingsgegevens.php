<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
    include "../DataBase/connectToDatabase.php";
    include "vragennav.php";
    ?>
    <title>Opleidingsgegevens</title>
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
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="wrapper col-sm-4 col-md-6" style="margin-top: 50px;">
                    <h2>Opleidingsgegevens</h2>
                    <form action="../Datascripts/addopleiding.php" method="post" enctype="multipart/form-data">

                        <br>
                        <h5>Alles met een "<b style="color: red">*</b>" is verplicht</h5>
                        <br>
                        <label>Sta jij op dit moment ingeschreven bij NHL Stenden?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg1_err)) ? 'has-error' : ''; ?>" name="inschrijving" required>
                            <option>Select option:</option>
                            <option>Ja</option>
                            <option>Nee</option>
                        </select>

                        <br>
                        <label>Voor welke opleiding sta jij op dit moment ingeschreven?<b style="color: red">*</b></label>
                        <div class="form-group">
                            <input type="text" name="opleiding" class="form-control" placeholder="Opleiding" required>
                        </div>
                        
                        <br>
                        <label>Welke opleidingvariant volg jij?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg3_err)) ? 'has-error' : ''; ?>" name="opleidingvar" required>
                            <option>Select option:</option>
                            <option> Voltijd </option>
                            <option> Deeltijd </option>
                            <option> Duaal </option>
                        </select>

                        <br>
                            <div class="form-group">
                            <label>Startdatum studie:<b style="color: red">*</b></label>
                            <input type="text" name="startdatum" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>

                        <br>
                        <label>Welke studiejaar zit jij?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg4_err)) ? 'has-error' : ''; ?>" name="studiejaar" required>
                            <option>Select option:</option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> Ouder jaars </option>
                        </select>

                        <br>
                        <label>Heb je de studie tussendoor onderbroken?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg5_err)) ? 'has-error' : ''; ?>" name="onderbr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Heb jij je gedurende de studieonderbreking ook uitgeschreven bij NHL Stenden?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg6_err)) ? 'has-error' : ''; ?>" name="uitschr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Als jij voor andere studies ingeschreven hebt gestaan bij NHL Stenden schrijf hier welke studie(s) dit waren.</label>

                        <div class="form-group">
                            <input type="text" name="andereopl" class="form-control" placeholder="Andere opleiding(en)">
                        </div>

                        <br>
                        <label>Als je voor andere HBO/Universiteit studies ingeschreven hebt gestaan bij andere instelling(en) schrijf hier dan de instelling, opleiding en datum van studie.) </label>

                        <div class="form-group">
                            <input type="text" name="andereopl2" class="form-control" placeholder="Andere opleiding(en)">
                        </div>

                        <br>
                        <label>Wat is de reden van studievertraging?<b style="color: red">*</b></label>
                        <?php
                        include "../include/dropdown.php";
                        ?>
                        <label> NB: Studenten die bestuurslid zijn van een erkende studentenvereniging, zoals benoemd in
                            Regeling Profileringsfonds, Artikel 4.1 lid 2a worden via hun erkende studentenverenging
                            geïnformeerd over hoe ze aanspraak kunnen maken op financiële ondersteuning. </label>

                        <?php

                        if (isset($_FILES['image'])) {
                            $errors = array();
                            $file_name = $_FILES['image']['name'];
                            $file_size = $_FILES['image']['size'];
                            $file_tmp = $_FILES['image']['tmp_name'];
                            $file_type = $_FILES['image']['type'];
                            $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                            $naam = "test" . '.' . $extension;

                            move_uploaded_file($file_tmp, "../Testbestanden/images/" . $naam);
                        }
                        ?>

                        <input type="file" name="image"/>
                        <input type="submit" value="Volgende"/>

                    </form>
                </div>
            </div>
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