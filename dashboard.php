<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
    if(isset($_SESSION["loggedin"]) === true){
        header("location: index.php");
    }
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    ?>
    <title>dashboard</title>
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
            <h3 class="mt-5">Jan de Jong</h3>
            <div class="col-sm-12 col-md-12">
                <div class="card" style="height: 400px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-6">
                            <br>
                            <p>Onder de brug 24</p>
                            <p>1234 DE, Leeuwarden</p>
                            <br>
                            <p>Studie: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; HBO-ICT</p> <!-- Misschien even kijken hoe dit netter kan. -->
                            <p>studienummer: &emsp;&emsp;&ensp; 123456789</p>
                            <p>Aanvraagnummer: &emsp;-</p>
                        </div>
                        <div class="col-sm-2 col-md-6 d-flex flex-row-reverse">
                            <form method="post">
                                <button class="btn btn-primary" style="margin-top: 330px; margin-right: 30px; margin-left: 10px;" type="submit">Nieuwe aanvraag</button>
                            </form>
                            <div class="align-self-end">Nog geen aanvraag gedaan.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container body end -->

        <!-- white space links -->
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- row end -->

</body>
</html>
