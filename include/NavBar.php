<?php
if (isset($_SESSION["loggedin"])) {
    ?>
    <!-- row start -->
    <div class="row">
        <!-- white space met logo -->
        <div class="col-lg-2">
            <a class="navbar-brand" href="index.php">
                <img alt="NHL_Stenden_Logo" src="pics/logo.png"
                     width=150">
            </a>
        </div>

        <!-- nav start -->
        <div class="col-lg-10">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php
                        if (isset($_SESSION["type"]) !== "admin") {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Kom ik in aanmerking?</a>
                        </li>

                        <?php
                        if (($_SESSION["type"]) === "admin") {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Maak een account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ovezichtAanvragen.php">Overzicht aanvragen</a>
                            </li>
                            <?php
                        }
                        ?>
                        <?php
                        if (($_SESSION["type"]) === "decaan") {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Maak een account</a>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="include/loguit.script.php">log uit</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- nav end -->
    </div>
    <!-- row end -->
    <?php
} else {
    ?>

    <!-- row start -->
    <div class="row">
        <!-- white space met logo -->
        <div class="col-lg-2">
            <a class="navbar-brand" href="index.php">
                <img alt="NHL_Stenden_Logo" src="pics/logo.png"
                     width=150">
            </a>
        </div>

        <!-- nav start -->
        <div class="col-lg-10">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Kom ik in aanmerking?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dropdown.php">Dropdown test</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- nav end -->
    </div>
    <!-- row end -->
    <?php
}
