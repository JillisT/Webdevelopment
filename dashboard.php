<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
    if(isset($_SESSION["loggedin"]) !== true){
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

            //Data laten zien
            $ID = $_SESSION["ID"];
            $studentennummer = $_SESSION["gebruikersnaam"];
            $sql = "SELECT aanvraag_num FROM users WHERE ID = :ID";
            $num = "<null>";
            if($result = $conn->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $result->bindParam(":ID", $ID, PDO::PARAM_INT);

                // Attempt to execute the prepared statement
                if($result->execute()){
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $num = $row["aanvraag_num"];
                        }
                    } else $num = "-";
                } else{
                    echo "Er is iets fout gegaan. Probeer het later nog eens.";
                }

                // Close statement
                unset($stmt);
            }

            ?>

            <h3 class="mt-5">Jan de Jong</h3>
            <div class="col-sm-12 col-md-12">
                <div class="card" style="height: 400px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-6">
                            <br>
                            <table>
                                <tr>
                                    <td>Onder de brug 24</td>
                                </tr>
                                <tr>
                                    <td>1234 DE, Leeuwarden</td>
                                </tr>
                                <tr class="blank_row">
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="width: 200px">Studie:</td>
                                    <td>HBO</td>
                                </tr>
                                <tr>
                                    <td style="width: 200px">Studentennummer:</td>
                                    <td><?php echo $studentennummer;?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px">Aanvraagnummer:</td>
                                    <td> <?php echo $num ?> </td>
                                </tr>
                            </table>
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
                                    }else{
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
