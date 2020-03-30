<html>
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    include "include/login.script.php";
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
            <!--login table start-->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="wrapper col-sm-4 col-md-6" style="margin-top: 50px;">
                    <h2>Inloggen</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Gebruikersnaam</label>
                            <input type="text" name="gebruikersnaam" class="form-control" value="">
                            <span class="help-block"><?php echo $gebruikersnaam_err ?></span>
                        </div>
                        <div class="form-group">
                            <label>Wachtwoord</label>
                            <input type="password" name="wachtwoord" class="form-control">
                            <span class="help-block"><?php echo $wachtwoord_err ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Login">
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