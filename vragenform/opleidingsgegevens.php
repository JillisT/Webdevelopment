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
            require "../include/NavBar.php";
            ?>
            <!--login table start-->
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="wrapper col-sm-8 col-md-12" style="margin-top: 50px;">
                    <h2>Opleidingsgegevens</h2>
                    <form action="../Datascripts/addopleiding.php" method="post">

                        <br>
                        <label>Sta jij op dit moment ingeschreven bij NHL Stenden?</label>
                        <select class="form-control <?php echo (!empty($leeg1_err)) ? 'has-error' : ''; ?>" name="inschrijving" required>
                            <option>Select option:</option>
                            <option>Ja</option>
                            <option>Nee</option>
                        </select>

                        <br>
                        <label>Voor welke opleiding sta jij op dit moment ingeschreven?</label>
                        <div class="form-group">
                            <input type="text" name="opleiding" class="form-control" placeholder="Opleiding" required>
                        </div>
                        
                        <br>
                        <label>Welke opleidingvariant volg jij?</label>
                        <select class="form-control <?php echo (!empty($leeg3_err)) ? 'has-error' : ''; ?>" name="opleidingvar" required>
                            <option>Select option:</option>
                            <option> Voltijd </option>
                            <option> Deeltijd </option>
                            <option> Duaal </option>
                        </select>

<!--                        <br>-->
<!--                        <label> Startdatum studie</label>-->
<!--                        <div class="form-group">-->
<!--                            <input type="date" name="startdatum" class="form-control" placeholder="Startdatum studie">-->
<!--                        </div>-->
                        
                        <br>
                            <div class="form-group">
                            <label>Startdatum studie:</label>
                            <input type="text" name="startdatum" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>

                        <br>
                        <label>Welke studiejaar zit jij?</label>
                        <select class="form-control <?php echo (!empty($leeg4_err)) ? 'has-error' : ''; ?>" name="studiejaar" required>
                            <option>Select option:</option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> Ouder jaars </option>
                        </select>

                        <br>
                        <label>Heb je de studie tussendoor onderbroken?</label>
                        <select class="form-control <?php echo (!empty($leeg5_err)) ? 'has-error' : ''; ?>" name="onderbr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Heb jij je gedurende de studieonderbreking ook uitgeschreven bij NHL Stenden?</label>
                        <select class="form-control <?php echo (!empty($leeg6_err)) ? 'has-error' : ''; ?>" name="uitschr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Als jij voor andere studies ingeschreven hebt gestaan bij NHL Stenden schrijf hier welke studie(s) dit waren.</label>
                        <label>(Als dit niet van toepassing is laat je dit veld leeg!)</label>
                        <div class="form-group">
                            <input type="text" name="andereopl" class="form-control" placeholder="Andere opleiding(en)">
                        </div>

                        <br>
                        <label>Als je voor andere HBO/Universiteit studies ingeschreven hebt gestaan bij andere instelling(en) schrijf hier dan de instelling, opleiding en datum van studie.) </label>
                        <label>(Als dit niet van toepassing is laat je dit veld leeg!)</label>
                        <div class="form-group">
                            <input type="text" name="andereopl2" class="form-control" placeholder="Andere opleiding(en)">
                        </div>

                        <br>
                        <label>Wat is de reden van studievertraging?</label>
                        <select class="form-control <?php echo (!empty($studvertr_err)) ? 'has-error' : ''; ?>" name="studvertr" required>
                            <option>Select option:</option>
                            <option>Ziekte of zwangerschap en bevalling</option>
                            <option>Een functiestoornis, handicap of chronische ziekte</option>
                            <option>Bijzondere familieomstandigheden</option>
                            <option> Een onvoldoende studeerbare opleiding</option>
                            <option>De door de hogeschool toegekende status van topsporter</option>

                            <!-- dit moet korter!!! -->
                            <option>Andere dan de in de hierboven genoemde onderdelen bedoelde omstandigheden die, indien
                                een daarop gebaseerd verzoek om financiële ondersteuning door het College van Bestuur niet
                                zou worden gehonoreerd, zouden leiden tot een onbillijkheid van overwegende aard</option>
                            <!--  -->

                            <option>Activiteiten op bestuurlijk of maatschappelijk gebied die naar het oordeel van het College van
                                Bestuur mede in het belang zijn van de hogeschool of van het onderwijs dat de student volgt</option>
                        </select>

                        
                        <label> NB: Studenten die bestuurslid zijn van een erkende studentenvereniging, zoals benoemd in
                            Regeling Profileringsfonds, Artikel 4.1 lid 2a worden via hun erkende studentenverenging
                            geïnformeerd over hoe ze aanspraak kunnen maken op financiële ondersteuning. </label>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Volgende">
                        </div>
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