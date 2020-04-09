<html>
<head>
    <?php
    session_start();
    require "../include/stylesheets.php";
    include "../DataBase/connectToDatabase.php";
    include "vragennav.php";
    ?>
    <title>Persoonsgevens</title>
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
                    <h2>Persoonlijke gegevens</h2>
                    <form action="../Datascripts/addpersoons.php" method="post">

                        <br>
                        <div class="form-group">
                            <label>Student nummer: </label>
                            <input type="number" name="studentnum" class="form-control" placeholder="Studentnummer" required>
                            <span class="help-block"></span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Achternaam: </label>
                            <input type="text" name="achternaam" class="form-control" placeholder="Achternaam" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Roepnaam:</label>
                            <input type="text" name="roepnaam" class="form-control" placeholder="Roepnaam" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Geboortedatum:</label>
                            <input type="text" name="geboortedatum" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Klas:</label>
                            <input type="text" name="klas" class="form-control" placeholder="Klas" required>
                        </div>
                        <br>
                        <label>Adres/Postcode/Woonplaats</label>
                        <div class="form-group">
                            <input type="text" name="adres" class="form-control" placeholder="Adres" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telefoonnummer:</label>
                            <input type="tel" name="telnummer" class="form-control" placeholder="Telefoonnummer" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>BSN nummer:</label>
                            <input type="text" name="bsn" class="form-control" placeholder="BSN nummer" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>IBAN rekeningnummer:</label>
                            <input type="text" name="IBAN" class="form-control" placeholder="IBAN rekeningnummer" required>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Opslaan" >
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