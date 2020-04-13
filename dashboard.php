<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
    session_start();
    if (!isset($_SESSION["loggedin"])) {
        header("location: index.php");
    }
    if ($_SESSION["type"] === "admin") {
        header("location: ovezichtAanvragen.php");
    }
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

            //Data laten zien
            $ID = $_SESSION["ID"];
            $studentnummer = "";
            $sql = "SELECT aanvraag_num FROM users WHERE ID = :ID";

            $num = "<null>";
            if ($result = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);

                // Attempt to execute the prepared statement
                if ($result->execute()) {
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $num = $row["aanvraag_num"];
                        }
                    } else $num = "-";
                } else {
                    echo "Er is iets fout gegaan. Probeer het later nog eens.";
                }

                // Close statement
                unset($stmt);
            }
            $student = "SELECT * FROM student WHERE id =:ID";
            if ($result = $conn->prepare($student)) {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);

                // Attempt to execute the prepared statement
                if ($result->execute()) {
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $studentnummer = $row["studentnummer"];
                            $achternaam = $row["achternaam"];
                            $roepnaam = $row["roepnaam"];
                            $klassennaam = $row["klassennaam"];
                            $geboortedatum = $row["geboortedatum"];
                            $adres = $row["studentnummer"];
                            $telefoonnummer = $row["telefoonnummer"];
                            $email = $row["email"];
                            $bsn = $row["studentnummer"];
                            $iban = $row["studentnummer"];
                        }
                    } else $studentnummer = "1";
                } else {
                    echo "Er is iets fout gegaan. Probeer het later nog eens.";
                }

                // Close statement
                unset($stmt);
            }
            $opleiding = "SELECT * FROM opleiding where id =:ID";
            if ($result = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);

                // Attempt to execute the prepared statement
                if ($result->execute()) {
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $num = $row["aanvraag_num"];
                        }
                    } else $num = "-";
                } else {
                    echo "Er is iets fout gegaan. Probeer het later nog eens.";
                }

                // Close statement
                unset($stmt);
            }
            $omstandigheden = "SELECT * FROM omstandigheden where id =:ID";
            if ($result = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);

                // Attempt to execute the prepared statement
                if ($result->execute()) {
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $num = $row["aanvraag_num"];
                        }
                    } else $num = "-";
                } else {
                    echo "Er is iets fout gegaan. Probeer het later nog eens.";
                }

                // Close statement
                unset($stmt);
            }


            ?>

            </td>
            <h3 class="mt-5">Overzicht</h3>
            <div class="col-sm-12 col-md-12">
                <div class="card" style="height: 400px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-6">
                            <br>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM student WHERE id = :id";
                            if ($stmt = $conn->prepare($sql)) {
                                $stmt->bindParam(":id", $ID, PDO::PARAM_INT);
                                if ($stmt->execute()) {

                                    if ($stmt->rowCount() > 0) {
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <h3>Persoonsgegevens</h3>
                                            <!-- TABLE DATA -->
                                            <label>Achternaam:</label>
                                            <p><?php echo $row["achternaam"]; ?></p>
                                            <label>Roepnaam:</label>
                                            <p><?php echo $row["roepnaam"]; ?></p>
                                            <label>Geboortedatum:</label>
                                            <p><?php echo $row["geboortedatum"]; ?></p>
                                            <label>Klas:</label>
                                            <p><?php echo $row["klassennaam"]; ?></p>
                                            <label>Adres/Postcode/Woonplaats:</label>
                                            <p><?php echo $row["adres"]; ?></p>
                                            <label>Telefoonnummer:</label>
                                            <p><?php echo $row["telefoonnummer"]; ?></p>
                                            <label>Email:</label>
                                            <p><?php echo $row["email"]; ?></p>
                                            <label>BSN nummer:</label>
                                            <p><?php echo $row["bsn"]; ?></p>
                                            <label>IBAN rekeningnummer:</label>
                                            <p><?php echo $row["iban"]; ?></p>
                                            <?php
                                        }
                                    } else { ?>
                                        <p>Er zijn nog geen gegevens ingevoerd.</p>
                                        <?php
                                    }
                                }
                            }

                            ?>
                            </tbody>
                        </div>
                        <div class="col-sm-2 col-md-6 d-flex flex-row-reverse">
                            <?php
                            if (!empty($num)) {
                                ?>
                                <form action="include/aanvraagVerwijderen.script.php" method="post">
                                    <button class="btn btn-primary"
                                            style="margin-top: 330px; margin-right: 30px; margin-left: 10px;"
                                            type="submit">Aanvraag verwijderen
                                    </button>
                                </form>
                                <?php
                            } else {
                                ?>
                                <form action="include/aanvraagAanmaken.script.php" method="post">
                                    <button class="btn btn-primary"
                                            style="margin-top: 330px; margin-right: 30px; margin-left: 10px;"
                                            type="submit">Nieuwe aanvraag
                                    </button>
                                </form>
                                <div class="align-self-end">Nog geen aanvraag gedaan.</div>
                                <?php
                            }
                            ?>

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
