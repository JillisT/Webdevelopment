<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
    include "../DataBase/connectToDatabase.php";
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
            require "NavBarVragen.php";
            ?>
            <!--login table start-->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="wrapper col-sm-4 col-md-6" style="margin-top: 50px;">
                    <h2>Omstandigheden</h2>
                    <form action="../Datascripts/addomstandigheden.php" method="post">

                        <br>
                        <h5>Alles met een "<b style="color: red">*</b>" is verplicht</h5>
                        <br>
                        <div class="form-group">
                            <label>
                                Hoeveel maanden studievertraging heb je opgelopen
                                als gevolg van de hierboven aangegeven bijzondere
                                omstandigheid c.q. omstandigheden?<b style="color: red">*</b>
                            </label>
                            <input type="text" name="vertr" class="form-control" placeholder="Maanden vertraging" required>
                        </div>
                        <br>

                        <label>Onder welk stelsel van DUO val jij?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg7_err)) ? 'has-error' : ''; ?>" name="duo" required>
                            <option>Select option:</option>
                            <option>Prestatiebeurs</option>
                            <option>Leenstelsel (per 1 september 2015)</option>
                        </select>
                        <br>



                        <label>Heb je recht (gehad) op een extra jaar studiefinanciering/aanvullende beurs via DUO?<b style="color: red">*</b></label>
                        <select class="form-control <?php echo (!empty($leeg8_err)) ? 'has-error' : ''; ?>" name="extrafin" required>
                            <option>Select option:</option>
                            <option>Ja</option>
                            <option>Nee</option>
                        </select>
                        <br>
<!--                        Bij ja, moet een bewijsstuk!-->

<!--                         insert add option here -->
<!--                        <input type="image" name="bewijsstud" class="form-control" placeholder="Bewijs extra studiefinanciering">-->
<!--                        <br>-->
    

                        <div class="form-group">
                            <label>
                                Indien je een extra jaar studiefinanciering hebt
                                aangevraagd, per wanneer is deze ingegaan? Vermeld
                                datum.

                            </label>
                            <input type="text" name="finstart" class="form-control" placeholder="JJJJ-MM-DD"
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Hoeveel maanden financiële ondersteuning vraag je
                                aan? (Maximaal 12)<b style="color: red">*</b>
                            </label>
                            <input type="text" name="finanonderst" class="form-control" placeholder="Maanden financiële ondersteuning" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Heb je eerder financiële ondersteuning uit het
                                Profileringsfonds ontvangen?<b style="color: red">*</b>
                            </label>
                            <select class="form-control <?php echo (!empty($leeg9_err)) ? 'has-error' : ''; ?>" name="ondgehad" required>
                                <option>Select option:</option>
                                <option>Ja</option>
                                <option>Nee</option>
                            </select>
                            
                        </div>
                        <br>
                        <br>
    
                        <div class="form-group">
                            <label>
                                Als je eerder financiële ondersteuning uit het
                                Profileringsfonds ontvangen, voor hoevel maanden waren dit?

                            </label>
                            <input type="text" name="duurgehad" class="form-control" placeholder="Maanden financiële ondersteuning" >
                        </div>
                        <br>
    
                        <div class="form-group">
                            <label>
                                Als je eerder financiële ondersteuning uit het
                                Profileringsfonds ontvangen, welk academisch jaar was dit. (20XX/20XX)
                                <br>
                                (Als dit niet van toepassing is laat je dit veld leeg!)
                            </label>
                            <input type="text" name="jaargehad" class="form-control" placeholder="20XX/20XX"
                            >
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Waaruit bestond de door jou aangevoerde bijzondere omstandigheid?<b style="color: red">*</b>
                            </label>
                            <input type="text" name="omstandig" class="form-control" placeholder="Oorsprong problemen" required>
                        </div>
                        <div class="form-group">
                            <label>
                                Wanneer vond deze plaats?<b style="color: red">*</b>
                            </label>
                            <input type="text" name="beginom" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                            <label>
                                En wanneer was dit geëindigd?<b style="color: red">*</b>
                            </label>
                            <input type="text" name="eindeom" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke datum en bij wie heb je melding gemaakt van deze bijzondere omstandigheid?<b style="color: red">*</b>
                            </label>
                            <label>
                                Bij decaan op:<b style="color: red">*</b>
                            </label>
                            <input type="text" name="datumdec" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                            <label>
                                Bij studiebegeleider op:<b style="color: red">*</b>
                            </label>
                            <input type="text" name="datumstudbeg" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke datum en bij wie heb je de bijzondere omstandigheid eventueel afgemeld?<b style="color: red">*</b>
                            </label>
                            <label>
                                Bij decaan op:<b style="color: red">*</b>
                            </label>
                            <input type="text" name="datumdec2" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                            <label>
                                Bij studiebegeleider op:<b style="color: red">*</b>
                            </label>
                            <input type="text" name="datumstudbeg2" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Geef aan welke studieonderdelen in welke onderwijsperiode en in welk opleidingsjaar niet
                                konden worden gevolgd, voor welke studieonderdelen de mogelijkheid van een herkansing
                                bestaat en welke studieonderdelen –wanneer- dienen te worden overgelopen.<b style="color: red">*</b>
                            </label>
                            <TEXTAREA Name="vertraging" ROWS="10" COLS="20" class="form-control" placeholder="Vertraging info" required></TEXTAREA>
<!--                            <input type="text" name="vertraging" class="form-control" placeholder="Vertraging info" required>-->
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Wat is de totale duur van de vertraging?<b style="color: red">*</b>
                            </label>
                            <input type="text" name="vertragingduur" class="form-control" placeholder="Vertragings duur" required>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke wijze heeft de bijzondere omstandigheid het verloop van je studie beïnvloed?<b style="color: red">*</b>
                            </label>
                            <TEXTAREA Name="vertragingwijze" ROWS="10" COLS="20" class="form-control" placeholder="Vertraging wijze" required></TEXTAREA>
<!--                            <input type="text" name="vertragingwijze" class="form-control" placeholder="Vertraging wijze" required>-->
                        </div>
                        <br>

                        <div class="form-group">
                            <label>
                                Op welke wijze heb je geprobeerd de negatieve gevolgen van de bijzondere omstandigheid voor
                                jouw studie dan wel studiefinanciering zoveel mogelijk te beperken dan wel te voorkomen
                                (VB: raadplegen decaan, tussentijds uitschrijven/stopzetten studiefinanciering)?<b style="color: red">*</b>
                            </label>
                            <TEXTAREA Name="vertragingreductie" ROWS="5" COLS="20" class="form-control" placeholder="Acties die ik heb gedaan om vertraging te beperken" required></TEXTAREA>
<!--                            <input type="text" name="vertragingreductie" class="form-control" placeholder="Acties die ik heb gedaan om vertraging te beperken" required>-->
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