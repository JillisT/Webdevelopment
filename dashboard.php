<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
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
            <h3 class="mt-5">Jan de Jong</h3>
            <div class="col-sm-12 col-md-12">
                <div class="card" style="height: 600px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-6">

                        </div>
                        <div class="col-sm-2 col-md-6">
                            <div class="d-flex flex-row-reverse">
                                <button class="">Nieuwe aanvraag</button>
                                <div class="align-self-end">Nog geen aanvraag gedaan.</div>
                            </div>
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
