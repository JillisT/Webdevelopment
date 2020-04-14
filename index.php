<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    ?>
    <title>Home</title>
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
            require "include/NavBar.php";
            ?>

            <!--item row 1 begin-->
            <div class="row mt-4">

                <div class="col-sm-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="include/loguit.script.php">Reset sessies</a>
                            </li>
                            <h5 class="card-title">Kom ik in aanmerking voor het profileringsfonds?</h5>
                            <a href="login.php" class="card-link">Heb je al een account? Log hier in.</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--item row 1 end-->

            <!-- bottom text begin -->
            <div class="row mt-4">
                <div class="col-sm-12 col-md-6">
                    <p>

                    <h5><br><b>Wat is het profileringsfonds?</b></br></h5>
                    <br>Het profileringsfonds is een fonds waar je een beroep op kunt doen als je door bijzondere omstandigheden niet binnen de reguliere studieduur kunt afstuderen.</br>


                    <h5><br><b>Kom ik in aanmerking voor het profileringsfonds? Dit zijn de voorwaarden waaraan je moet voldoen voor het Profileringsfonds.</b></br></h5>


                        <br>- Je hebt collegegeld betaald voor de opleiding.</br>
                        <br>- Je ontvangt studiefinanciering.</br>
                        <br>- Je hebt studievertraging opgelopen door bijzondere omstandigheden.</br>

                        <br>Als je aan de bovenstaande 3 voorwaarden voldoet dan kom je in aanmerking voor het profileringsfonds.</br>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p>
                    <h5><br><b>Hoe vraag ik steun van het profileringsfonds aan?</b></br></h5>
                        <br>Neemt contact op met je decaan. Deze zal je helpen om een account aan te maken. Je aanvraag vul je volledig in op dit digitale aanvraagformulier. Ook je decaan en
                    studiebegeleider/coach vullen dit digitaal in. </br>

                    <h5><br><b>Hoe en wanneer wordt mijn aanvraag behandeld?</b></br></h5>
                    <br><b>Alleen volledige aanvragen worden in behandeling genomen.</b> Is je aanvraag niet compleet, dan wordt je hiervan op de hoogte gesteld en moet je de aanvraag
                    aanvullen en opnieuw indienen. Je aanvraag zal worden behandeld in de vergadering. De aanvraag moet 2 weken voor de vergadering worden ingediend. Mocht een aanvraag later
                    worden ingediend dan zal je aanvraag tijdens de eerstvolgende vergadering in behandeling worden
                    genomen. Voor vergaderdata, neem contact op met profileringsfonds@nhlstenden.com.</br>
                    </p>
                </div>
            </div>
            <!-- bottom text end -->

        </div>


        <!-- container body end -->

        <!-- white space links -->
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- row end -->

</body>
</html>
