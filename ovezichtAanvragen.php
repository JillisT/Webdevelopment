<?php
include "DataBase/connectToDatabase.php";
session_start();
if (($_SESSION["type"]) !== "admin") {
    header("location: dashboard.php");
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
    <h3 class="mt-5">Overzicht aanvragen</h3>
    <div class="col-sm-12 col-md-12">
    <div class="card" style="height: 400px;">
    <div class="row">
    <div class="col-sm-2 col-md-6">

    <table class="table is-bordered">
    <tr>
        <!-- Table Header. -->
        <th>Studentennummer</th>
        <th>Naam</th>
        <th>Inkijken</th>
    </tr>
    <?php

    $sql = "SELECT studentnummer, roepnaam, achternaam ,id FROM student where ingevuld = 'ja'";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?php echo $row["studentnummer"] ?></td>
                <td><?php echo $row["roepnaam"] . " " . $row["achternaam"]; ?></td>
                <td>
                    <a href="inkijk_form.php?id=<?php echo $row["id"]; ?>"
                       class="button is-danger">Inkijken</a>
                </td>
            </tr>
            <?php
        }
    }
?>
    </table>

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
