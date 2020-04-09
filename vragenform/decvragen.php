<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
    include "../DataBase/connectToDatabase.php";
    ?>
    <title>Decaan vragen</title>
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
                    <form action="" method="post">

                        <h3> Gegevens omstandigheden student </h3>
                        <br>
                        <div class="form-group">
                            <label>
                                Naam student: <input type="text" name="naamstud" class="form-control" placeholder="Naam student" required>
                                <br>
                                Studentnummer: <input type="text" name="studnum" class="form-control" placeholder="Studentnummer" required>
                                <br>
                                Opleiding: <input type="text" name="studopl" class="form-control" placeholder="Opleiding" required>
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
                            </label>
                        </div>
                        <br>

                        <label style="color: red">
                            Student verklaart:
                            <br>
                            • dat de bij de melding gedane opgave van omstandigheden, periode en andere mededelingen,
                            inclusief overgelegde bescheiden, naar waarheid zijn gedaan;
                            <br>
                            • akkoord te gaan met de inhoud van dit meldingsformulier en de daarin vastgelegde afspraken. De
                            student is er van op de hoogte dat de toekenning van een voorziening mede afhankelijk is van de
                            nakoming van deze afspraken;
                            <br>
                            • akkoord te gaan met de overhandiging door het studentendecanaat van dit meldingsformulier
                            indien van toepassing aan de studieloopbaanbegeleider, de examen commissie en bij een
                            aanvraag aan de commissie Profileringsfonds;
                            <br>
                            • dat nieuwe omstandigheden of verandering in situatie worden gemeld bij de studentendecaan.
                        </label>

                        <br>


                        <h3> Door decaan in te vullen data: </h3>
                        <div class="form-group">
                            <label>
                                Melding behandeld door studentendecaan (naam)
                            </label>
                            <input type="text" name="decaannaam" class="form-control" placeholder="Naam decaan" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Datum melding
                            </label>
                            <input type="text" name="datmeldingdec" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                            <label>
                                Datum afmelding
                            </label>
                            <input type="text" name="datafmeldingdec" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Toelichting
                            </label>
                            <input type="text" name="toelichting" class="form-control" placeholder="Toelichting">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Hoeveel maanden ondersteuning adviseer jij? Evt. weging met extra studievertraging?
                            </label>
                            <input type="text" name="advies" class="form-control" placeholder="Advies">
                        </div>
                        <br>



                        <br>
                        <br>

                        <b>
                            Het formulier melding studievertragende omstandigheden wordt alleen gebruikt door direct
                            betrokken medewerkers van NHL Stenden hogeschool. Er wordt vertrouwelijk omgegaan met de
                            informatie die op het formulier wordt vermeld.
                            <br>
                            NB: voor de student: Bewaar al je bewijsstukken!
                        </b>



                        <br>
                        <br>
                        <br>


                        <b>De studentendecaan heeft bovenstaande gegevens onderzocht en besproken met de student. De
                            studentendecaan bevestigt tevens aan de commissie Profileringsfonds, dat de studentendecaan van
                            oordeel is dat aan de criteria om een aanvraag te kunnen doen wordt voldaan.
                        </b>
                        <br>
                        <input type="checkbox" name="correct">
                        <br>
                        <br>
                        <label>Door ondertekening verklaar ik hierbij dat ik dit formulier met inbegrip van de versterkte informatie naar waarheid heb ingevuld.</label>
                        <input type="checkbox" name="verklaringstudbeg">

                        <br>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
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