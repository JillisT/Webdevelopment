<html>
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    ?>
    <title>Contact</title>
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
            <div class="col-sm-12 col-md-12 mt-5">
                <div class="card" style="height: 450px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-6" style="margin: 20px;">

                            <h1>Leeuwarden (hoofdvestiging)</h1>
                            <br>
                            <h2>Adres</h2>
                            <p>NHL Stenden Hogeschool Leeuwarden <br>
                                Rengerslaan 8-10 <br>
                                8917 DD Leeuwarden<br>
                                <a href="mailto:studentinfo@nhlstenden.com">studentinfo@nhlstenden.com</a><br>
                                +31 (0)88 991 7000</p>

                            <br>
                            <h2>Postadres</h2>
                            <p>Postbus 1080 <br>
                                8900 CB Leeuwarden</p>

                        </div>
                    </div>
                </div>
            </div>




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