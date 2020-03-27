<html>
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    include "include/register.script.php";
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
            <!-- container body start -->
            <div class="wrapper">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="ID" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="wachtwoord" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label>Herhaal wachtwoord</label>
                        <input type="password" name="herhaal_wachtwoord" class="form-control" value="">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label>account type:</label><br>
                        <input type="radio" id="student" name="type" value="student" checked="checked">
                        <label for="male">Student</label><br>
                        <input type="radio" id="SLBer" name="type" value="SLBer">
                        <label for="female">SLB'er (Studieloopbaanbegeleider)</label><br>
                        <input type="radio" id="decaan" name="type" value="decaan">
                        <label for="other">Decaan</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <!-- container body end -->

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