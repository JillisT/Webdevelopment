<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
//    include "/Webdevelopmentproject/DataBase/connectToDatabase.php";
    ?>
    <title>Persoonsgegevens</title>
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
                    <form action="" method="post">

                        <br>
                        <label>Sta jij op dit moment ingeschreven bij NHL Stenden?</label>
                        <select class="form-control" name="inschrijving" required>
                            <option>Select option:</option>
                            <option>Ja</option>
                            <option>Nee</option>
                        </select>

                        <br>
                        <label>Voor welke opleiding sta jij op dit moment ingeschreven?</label>
                        <select class="form-control" name="opleiding" required>
                            <option>Select option:</option>
                            <option> .opleiding sample. </option>
                            <option> ..opleiding sample.. </option>
                            <option> ...opleiding sample... </option>
                        </select>

                        <br>
                        <label>Welke opleidingvariant volg jij?</label>
                        <select class="form-control" name="opleidingvar" required>
                            <option>Select option:</option>
                            <option> Voltijd </option>
                            <option> Deeltijd </option>
                            <option> Duaal </option>
                        </select>

                        <br>
                        <label> Startdatum studie</label>
                        <div class="form-group">
                            <input type="date" name="startdatum" class="form-control" placeholder="Startdatum studie">
                        </div>

                        <br>
                        <label>Welke studiejaar zit jij?</label>
                        <select class="form-control" name="studiejaar" required>
                            <option>Select option:</option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> Ouder jaars </option>
                        </select>

                        <br>
                        <label>Heb je de studie tussendoor onderbroken?</label>
                        <select class="form-control" name="onderbr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Heb jij je gedurende de studieonderbreking ook uitgeschreven bij NHL Stenden?</label>
                        <select class="form-control" name="uitschr" required>
                            <option>Select option:</option>
                            <option> Ja </option>
                            <option> Nee </option>
                        </select>

                        <br>
                        <label>Als jij voor andere studies ingeschreven hebt gestaan bij NHL Stenden schrijf hier welke studie(s) dit waren.</label>
                        <label>(Als dit niet van toepassing is laat je dit veld leeg!)</label>
                        <div class="form-group">
                            <input type="text" name="andereopl" class="form-control" placeholder="Andere opleiding(en)" required>
                        </div>

                        <br>
                        <label>Als je voor andere HBO/Universiteit studies ingeschreven hebt gestaan bij andere instelling(en) schrijf hier dan de instelling, opleiding en datum van studie.) </label>
                        <label>(Als dit niet van toepassing is laat je dit veld leeg!)</label>
                        <div class="form-group">
                            <input type="text" name="andereopl2" class="form-control" placeholder="Andere opleiding(en)" required>
                        </div>


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