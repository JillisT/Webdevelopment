<html>
<head>
    <?php
    include "include/stylesheets.php"
    ?>
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
            <div class="wrapper mt-5">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form method="post">
                    <div class="form-group">
                        <label>Emailadres</label>
                        <input type="text" name="email" class="form-control"> <!--value= (echo email) -->
                        <span class="help-block"><!-- (echo error) --></span>
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="wachtwoord" class="form-control">
                        <span class="help-block"><!-- (echo error) --></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
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