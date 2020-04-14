<html>
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    include "AdminDashboardScripts/Get_all_info.php";
    $id = trim($_GET["id"]);
    ?>
    <title>Persoonsgevens</title>
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

                    <!-- Persoonsgegevens -->
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM student WHERE id = :id";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        if ($stmt->execute()) {

                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <h3>Persoonlijke gegevens</h3>
                                    <!-- TABLE DATA -->
                                    <label>Achternaam:</label>
                                    <p><?php echo $row["achternaam"]; ?></p>
                                    <label>Roepnaam:</label>
                                    <p><?php echo $row["roepnaam"]; ?></p>
                                    <label>Geboortedatum:</label>
                                    <p><?php echo $row["geboortedatum"]; ?></p>
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
                            }
                        }
                    }
                    ?>
                    </tbody>
<br>
                    <!-- Opleiding -->
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM opleiding WHERE id = :id";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        if ($stmt->execute()) {

                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <h3>Opleiding gegevens</h3>
                                    <!-- TABLE DATA -->
                                    <label>Ingeschreven:</label>
                                    <p><?php echo $row["ingeschreven"]; ?></p>
                                    <label>Opleiding:</label>
                                    <p><?php echo $row["opleiding"]; ?></p>
                                    <label>Opleidingsvariant:</label>
                                    <p><?php echo $row["opleidingsvariant"]; ?></p>
                                    <label>Startjaar:</label>
                                    <p><?php echo $row["startjaar"]; ?></p>
                                    <label>Studiejaar:</label>
                                    <p><?php echo $row["studiejaar"]; ?></p>
                                    <label>Onderbroken:</label>
                                    <p><?php echo $row["onderbroken"]; ?></p>
                                    <label>Uitgeschreven:</label>
                                    <p><?php echo $row["uitgeschreven"]; ?></p>
                                    <label>andere studie(s):</label>
                                    <p><?php echo $row["andere_studie"]; ?></p>
                                    <p><?php echo $row["naam_andere_studie"]; ?></p>
                                    <label>Reden van aanvraag:</label>
                                    <p><?php echo $row["reden"]; ?></p>
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                    </tbody>
                    <br>
                    <!-- Omstandigheden -->
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM omstandigheden WHERE id = :id";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        if ($stmt->execute()) {

                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <h3>Omstandigheden</h3>
                                    <!-- TABLE DATA -->
                                    <label>Studievertraging:</label>
                                    <p><?php echo $row["studievertraging"]; ?></p>
                                    <label>Duo stelsel:</label>
                                    <p><?php echo $row["duo_stelsel"]; ?></p>
                                    <label>Recht op extra financiering:</label>
                                    <p><?php echo $row["recht_extra_financiering"]; ?></p>
                                    <label>Financiering ingang:</label>
                                    <p><?php echo $row["financiering_ingegaan"]; ?></p>
                                    <label>Duur van aanvraag:</label>
                                    <p><?php echo $row["aanvraag_duur"]; ?></p>
                                    <label>Heeft ondersteuning gehad:</label>
                                    <p><?php echo $row["ondersteuning_gehad"]; ?></p>
                                    <label>Duur van ondersteuning:</label>
                                    <p><?php echo $row["ondersteuning_duur"]; ?></p>
                                    <label>Jaar van ondersteuning:</label>
                                    <p><?php echo $row["ondersteuning_jaar"]; ?></p>
                                    <label>Toelichting:</label>
                                    <p><?php echo $row["toelichting"]; ?></p>
                                    <label>Begin van het probleem:</label>
                                    <p><?php echo $row["begin_probleem"]; ?></p>
                                    <label>Einde van het probleem:</label>
                                    <p><?php echo $row["einde_probleem"]; ?></p>
                                    <label>Bij decaan gemeld:</label>
                                    <p><?php echo $row["melding_decaan"]; ?></p>
                                    <label>Bij SLBer gemeld:</label>
                                    <p><?php echo $row["melding_slb"]; ?></p>
                                    <label>Bij decaan AFgemeld:</label>
                                    <p><?php echo $row["afmelding_decaan"]; ?></p>
                                    <label>Bij SLBer AFgemeld:</label>
                                    <p><?php echo $row["afmelding_slb"]; ?></p>
                                    <label>Studieonderdelen:</label>
                                    <p><?php echo $row["studieonderdelen"]; ?></p>
                                    <label>Duur van vertraging:</label>
                                    <p><?php echo $row["duur_vertraging"]; ?></p>
                                    <label>Invloed van de omstandigheden:</label>
                                    <p><?php echo $row["invloed_omstandigheden"]; ?></p>
                                    <label>Beperking van de omstandigheden:</label>
                                    <p><?php echo $row["beperken_omstandigheden"]; ?></p>
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                    </tbody>
                    <br>
                    <h3>ondertekend</h3>
                    <p>Ondertekend decaan:</p>
                    <?php
                    $sql = "SELECT ingevuld FROM decaan WHERE id = :id";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        if ($stmt->execute()) {
                            if($stmt === 'ja'){
                                echo "ja";
                            }else echo "nee";
                        }
                    }
                    ?>

                    <p>Ondertekend SLBer:</p>
                    <?php
                    $sql = "SELECT ingevuld FROM slb WHERE id = :id";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                        if ($stmt->execute()) {
                            if($stmt === 'ja'){
                                echo "ja";
                            }else echo "nee";
                        }
                    }
                    ?>

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