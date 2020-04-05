<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
    //include "DataBase/connectToDatabase.php";
    ?>
    <title>Vragen</title>
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
                <div class="col-lg-3"></div>
                <div class="wrapper col-sm-4 col-md-6" style="margin-top: 50px;">
                    <h2>Login</h2>
                    <form action="" method="post">

                        <br>
                        <div class="form-group">
                            <label>
                                Hoeveel maanden studievertraging heb je opgelopen
                                als gevolg van de hierboven aangegeven bijzondere
                                omstandigheid c.q. omstandigheden?
                            </label>
                            <input type="text" name="vertr" class="form-control" placeholder="Maanden vertraging" required>
                        </div>
                        <br>

                        <label>Onder welk stelsel van DUO val jij?</label>
                        <select class="form-control <?php echo (!empty($leeg7_err)) ? 'has-error' : ''; ?>" name="inschrijving" required>
                            <option>Select option:</option>
                            <option>Prestatiebeurs</option>
                            <option>Leenstelsel (per 1 september 2015)</option>
                        </select>
                        <br>



                        <label>Heb je recht (gehad) op een extra jaar studiefinanciering/aanvullende beurs via DUO?</label>
                        <!-- insert add option here -->
                        <input type="image" name="bewijsstud" class="form-control" placeholder="Bewijs extra studiefinanciering">
                        <br>




                        <div class="form-group">
                            <label>
                                Indien je een extra jaar studiefinanciering hebt
                                aangevraagd, per wanneer is deze ingegaan? Vermeld
                                datum.
                            </label>
                            <input type="date" name="jaarextra" class="form-control" placeholder="Jaar extra studiefinanciering" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Hoeveel maanden financiële ondersteuning vraag je
                                aan? (Maximaal 12)
                            </label>
                            <input type="text" name="finanonderst" class="form-control" placeholder="Maanden financiële ondersteuning" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Heb je eerder financiële ondersteuning uit het
                                Profileringsfonds ontvangen?
                                <br>
                                (Als dit niet van toepassing is laat je dit veld leeg!)
                            </label>
                            <input type="text" name="oudfinanonderst" class="form-control" placeholder="Eerdere maanden financiële ondersteuning">
                        </div>
                        <br>
                        <br>

                        <div class="form-group">
                            <label>
                                Waaruit bestond de door jou aangevoerde bijzondere omstandigheid?
                            </label>
                            <input type="text" name="oorspr" class="form-control" placeholder="Oorsprong problemen" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Wanneer vond deze plaats en wanneer geëindigd?
                            </label>
                            <input type="date" name="jaaroorspr" class="form-control" placeholder="Jaar begin probleem" required>
                        <br>
                            <input type="date" name="jaareinde" class="form-control" placeholder="Jaar einde probleem" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke datum en bij wie heb je melding gemaakt van deze bijzondere omstandigheid?
                            </label>
                            <input type="date" name="datumdec" class="form-control" placeholder="Melding probleem bij decaan/topsportcoördinator" required>
                            <br>
                            <input type="date" name="datumstudbeg" class="form-control" placeholder="Melding probleem bij studiebegeleider" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke datum en bij wie heb je de bijzondere omstandigheid eventueel afgemeld?
                            </label>
                            <input type="date" name="datumdec2" class="form-control" placeholder="Melding einde probleem bij decaan/topsportcoördinator" required>
                            <br>
                            <input type="date" name="datumstudbeg2" class="form-control" placeholder="Melding einde probleem bij studiebegeleider" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Geef aan welke studieonderdelen in welke onderwijsperiode en in welk opleidingsjaar niet
                                konden worden gevolgd, voor welke studieonderdelen de mogelijkheid van een herkansing
                                bestaat en welke studieonderdelen –wanneer- dienen te worden overgelopen.
                            </label>
                            <input type="text" name="vertraging" class="form-control" placeholder="Vertraging info" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Wat is de totale duur van de vertraging?
                            </label>
                            <input type="text" name="vertragingduur" class="form-control" placeholder="Vertragings duur" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke wijze heeft de bijzondere omstandigheid het verloop van je studie beïnvloed?
                            </label>
                            <input type="text" name="vertragingwijze" class="form-control" placeholder="Vertraging wijze" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke wijze heb je geprobeerd de negatieve gevolgen van de bijzondere omstandigheid voor
                                jouw studie dan wel studiefinanciering 1 zoveel mogelijk te beperken dan wel te voorkomen
                                (VB: raadplegen decaan, tussentijds uitschrijven/stopzetten studiefinanciering)?
                            </label>
                            <input type="text" name="vertragingreductie" class="form-control" placeholder="Acties die ik heb gedaan om vertraging te beperken" required>
                        </div>
                        <br>

                        <b>
                            Indien de bijzondere omstandigheid veroorzaakt werd door een derde en je met het oog op de
                            aansprakelijkheid een (letselschade-)procedure gaat voeren of deze reeds voert, moet je hiervan
                            melding maken.
                            <br>
                            <br>
                            Indien de schade met betrekking tot studiefinancieringskosten gedekt worden door een
                            verzekering en/of in een procedure wordt ingebracht, dan moet je dit per ommegaande melden.
                        </b>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <label>Door ondertekening verklaar ik hierbij dat ik dit formulier met inbegrip van de versterkte informatie naar waarheid heb ingevuld.</label>
                        <input type="checkbox" name="verklaring">





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