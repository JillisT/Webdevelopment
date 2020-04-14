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
                        <h5>Alles met een "<b style="color: red">*</b>" is verplicht</h5>
                        <br>
                        <div class="form-group">
                            <label>Student nummer:<b style="color: red">*</b></label>
                            <input type="number" name="studentnum" class="form-control" placeholder="Studentnummer" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Achternaam:<b style="color: red">*</b> </label>
                            <input type="text" name="achternaam" class="form-control" placeholder="Achternaam" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Roepnaam:<b style="color: red">*</b>
                                <div class="btn-group" style="position: absolute; right: 20;" >
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" aria-label="Right Align">
                                        <i class="fa fa-info-circle"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" > Geef hier je naam zoals jij aangepsroken wil worden.</a>
                                    </div>
                                </div></label>
                            <input type="text" name="roepnaam" class="form-control" placeholder="Roepnaam" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Geboortedatum:<b style="color: red">*</b>
                                <div class="btn-group" style="position: absolute; right: 20;" >
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" aria-label="Right Align">
                                        <i class="fa fa-info-circle"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" > Vul de de datum in als: jjjj-mm-dd. Andere formaten worden niet geacepteerd</a>
                                    </div>
                                </div>
                            </label>
                            <input type="text" name="geboortedatum" class="form-control" placeholder="JJJJ-MM-DD" required
                                   pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                        </div>
<!--                        <br>-->
<!--                        Staat er niet tussen. Moet dit erbij??? -->
<!--                        <div class="form-group">-->
<!--                            <label>Klas:</label>-->
<!--                            <input type="text" name="klas" class="form-control" placeholder="Klas" >-->
<!--                        </div>-->
<!--                        <br>-->
                        <!--  -->
                        <label>Adres/Postcode/Woonplaats:<b style="color: red">*</b></label>
                        <div class="form-group">
                            <input type="text" name="adres" class="form-control" placeholder="Adres" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telefoonnummer:<b style="color: red">*</b></label>
                            <input type="tel" name="telnummer" class="form-control" placeholder="Telefoonnummer" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Email:<b style="color: red">*</b></label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>BSN nummer:<b style="color: red">*</b></label>
                            <input type="text" name="bsn" class="form-control" placeholder="BSN nummer" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>IBAN rekeningnummer:<b style="color: red">*</b></label>
                            <input type="text" name="IBAN" class="form-control" placeholder="IBAN rekeningnummer" required>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Volgende" >
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