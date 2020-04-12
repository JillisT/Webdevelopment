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
                    <form action="../Datascripts/addslb.php" method="post">

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
                            </label>

                                <h3> Door studiebegeleider in te vullen data: </h3>
                                <br>
                                <div class="form-group">
                                    <label>
                                        Wanneer heeft de student de melding gemaakt over de problemen?
                                    </label>
                                    <input type="text" name="datmeldingstudbeg" class="form-control" placeholder="JJJJ-MM-DD" required
                                           pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                                </div>
                                <div class="form-group">
                                    <label>
                                        Wanneer heeft de student de melding gemaakt dat de omstandigheden zijn afgelopen?
                                    </label>

                                        <b size="1">(Indien er nog steeds sprake is van de bijzondere omstandigheid, hoeft
                                        hier geen einddatum worden vermeld).
                                        </b>

                                    <input type="text" name="dateinde" class="form-control" placeholder="JJJJ-MM-DD" required
                                           pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                                </div>

                                <div class="form-group">
                                    <label>
                                        Totale duur van omstandigheden (in maanden).
                                    </label>
                                    <input type="text" name="duuromst" class="form-control" placeholder="Duur in maanden" required>
                                </div>

                                <br>


                                <h3> Studiepunten: </h3>
                                <br>
                                <div class="form-group">
                                    <label>
                                        Nominaal aantal EC dat gedurende deze periode behaald had kunnen worden.
                                    </label>
                                    <input type="text" name="maxecs" class="form-control" placeholder="Max EC's" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Aantal EC dat gedurende deze periode door de student is behaald.
                                    </label>
                                    <input type="text" name="behecs" class="form-control" placeholder="Behaalde EC's" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Aantal EC dat gedurende deze periode door de student is behaald en in Progress staat.
                                    </label>
                                    <input type="text" name="progressecs" class="form-control" placeholder="Behaalde EC's" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Hoeveel EC moeten er nog worden behaald.
                                    </label>
                                    <input type="text" name="tebehecs" class="form-control" placeholder="Behaalde EC's" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Hoeveel maanden is er (gelet op de onderwijsprogrammering) nodig om de als gevolg van de
                                        bijzondere omstandigheid opgelopen studievertraging in te halen.
                                    </label>
                                    <input type="text" name="maandennodig" class="form-control" placeholder="Benodigde maanden" required>
                                </div>


                                <label>
                                    De mogelijkheden indien de student(e) gezakt is voor een
                                    toets en of tentamen.
                                </label>
                                <select class="form-control <?php echo (!empty($leeg10_err)) ? 'has-error' : ''; ?>" name="regeling" required>
                                    <option>Select option:</option>
                                    <option>Volledig overlopen</option>
                                    <option>Herkansing</option>
                                </select>

                                <br>


                                <h3> Extra informatie: </h3>
                                <br>
                                <div class="form-group">
                                    <label>
                                        Eventuele extra informatie en/of opmerkingen van de studiebegeleider of coördinator
                                        studie(traject)begeleider.
                                    </label>
                                    <input type="text" name="extrainfo" class="form-control" placeholder="Extra info van studiebegeleider">
                                </div>

                                <br>
                                <h3> Info Studiebegeleider: </h3>
                                <br>
                                <div class="form-group">
                                    <label>
                                        Naam.
                                    </label>
                                    <input type="text" name="naam" class="form-control" placeholder="Naam">
                                </div>

                            <label>
                                Functie.
                            </label>
                            <select class="form-control <?php echo (!empty($leeg11_err)) ? 'has-error' : ''; ?>" name="functie" required>
                                <option>Select option:</option>
                                <option>studiebegeleider</option>
                                <option>coördinator studie(traject)begeleiding</option>
                            </select>

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