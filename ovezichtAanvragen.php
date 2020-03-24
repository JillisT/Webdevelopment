<?php
include "DataBase/connectToDatabase.php";
session_start();
if (isset($_SESSION["admin"])) {
    header("location: index.php");
} else { ?>

    <html>
    <head>
        <?php
        //session_start();
        require "include/stylesheets.php";
        include "DataBase/connectToDatabase.php";
        ?>
        <title>login</title>
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
                                <p>Dit is de pagina voor de Administatie.</p>
                            </div>
                            <div class="col-sm-2 col-md-6 d-flex flex-row-reverse">
                                <form method="post">
                                    <button class="btn btn-primary"
                                            style="margin-top: 330px; margin-right: 30px; margin-left: 10px;"
                                            type="submit">Overzicht aanvragen
                                    </button>
                                </form>
                                <div class="align-self-end"><p>Er zijn nog geen aanvraag gedaan.</p></div>
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
    <?php
}
?>
