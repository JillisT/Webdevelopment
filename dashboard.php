<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php
        session_start();
        if(!isset($_SESSION["loggedin"])){
            header("location: index.php");
        }
        if($_SESSION["type"] === "admin" ){
            header("location: ovezichtAanvragen.php");
        }
        require "include/stylesheets.php";
        include "DataBase/connectToDatabase.php";
    ?>
    <title>Dashboard</title>
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
                include "Datascripts/dashselect.php";
                
                $id = $_SESSION['ID'];
               
    
            if (($_SESSION["type"]) == "student")
                { //Voor studenten)

            ?>
            </td>
            <h3 class="mt-5"><b>Overzicht</b></h3>
            <div class="col-sm-12 col-md-12">
                <!--                                <div class="card" style="height: 400px;">-->
                <div class="row">
                    <div class="col-sm-2 col-md-12">
                        <br>
                        <table>
                            <tr>
                                <td><b>Persoonsgegevens:</b></td>
                            <tr>
                                <td style="width: 200px">Studentennummer:</td>
                        
                                <td><?php echo $studentnummer; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Aanvraagnummer:</td>
                                <td> <?php echo $num ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Achternaam:</td>
                        
                                <td><?php echo $achternaam; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Roepnaam:</td>
                                <td> <?php echo $roepnaam ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Klassennaam:</td>
                        
                                <td><?php echo $klassennaam; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Geboortedatum:</td>
                                <td> <?php echo $geboortedatum ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Adres:</td>
                        
                                <td><?php echo $adres; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Telefoonnummer:</td>
                                <td> <?php echo $telefoonnummer ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Email:</td>
                        
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <td style="...">BSN:</td>
                                <td> <?php echo $bsn ?> </td>
                            </tr>
                            <tr>
                                <td style="...">IBAN:</td>
                                <td> <?php echo $iban ?> </td>
                            </tr>
                            <tr>
                                <td><b>Opleidingsgegevens:</b></td>
                    
                            <tr>
                                <td style="width: 200px">Ingeschreven:</td>
                        
                                <td><?php echo $ingeschreven; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Opleiding:</td>
                                <td> <?php echo $opleiding2 ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Opleidingsvariant:</td>
                        
                                <td><?php echo $opleidingsvariant; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Startjaar:</td>
                                <td> <?php echo $startjaar ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Studiejaar:</td>
                        
                                <td><?php echo $studiejaar; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Onderbroken:</td>
                                <td> <?php echo $onderbroken ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Uitgeschreven:</td>
                        
                                <td><?php echo $uitgeschreven; ?></td>
                            </tr>
                            <tr>
                                <td style="...">Andere studie:</td>
                                <td> <?php echo $andere_studie ?> </td>
                            </tr>
                            <tr>
                                <td style="...">Naam andere studie:</td>
                                <td> <?php echo $naam_andere_studie ?> </td>
                            </tr>
                            <tr>
                                <td style="...">Reden:</td>
                                <td> <?php echo $reden ?> </td>
                            </tr>
                            <tr>
                                <td><b>Omstandigheden:</b></td>
                            <tr>
                                <td style="width: 200px">Studievertraging:</td>
                        
                                <td><?php echo $studievertraging; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">DUO stelsel:</td>
                                <td> <?php echo $duo_stelsel ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Recht extra financiering?:</td>
                        
                                <td><?php echo $recht_extra_financiering; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Financiering_ingegaan:</td>
                                <td> <?php echo $financiering_ingegaan ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Aanvraag duur:</td>
                        
                                <td><?php echo $aanvraag_duur; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Ondersteuning gehad?:</td>
                                <td> <?php echo $ondersteuning_gehad ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Ondersteuning duur:</td>
                        
                                <td><?php echo $ondersteuning_duur; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Ondersteuning jaar:</td>
                                <td> <?php echo $ondersteuning_jaar ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Toelichting:</td>
                        
                                <td><?php echo $toelichting; ?></td>
                            </tr>
                            <tr>
                                <td style="...">Begin probleem:</td>
                                <td> <?php echo $begin_probleem ?> </td>
                            </tr>
                            <tr>
                                <td style="...">Melding decaan:</td>
                                <td> <?php echo $melding_decaan ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Melding SLB'er:</td>
                        
                                <td><?php echo $melding_slb; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Afmelding decaan:</td>
                                <td> <?php echo $afmelding_decaan ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Afmelding SLB'er:</td>
                        
                                <td><?php echo $afmelding_slb; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Studieonderdelen:</td>
                                <td> <?php echo $studieonderdelen ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Duur vertraging:</td>
                        
                                <td><?php echo $duur_vertraging; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Invloed omstandigheden:</td>
                                <td> <?php echo $invloed_omstandigheden ?> </td>
                            </tr>
                            <tr>
                                <td style="width: 200px">Beperken omstandigheden:</td>
                                <td><?php echo $beperken_omstandigheden; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-2 col-md-12 d-flex flex-row-reverse">
                        <?php
                            if (!empty($num))
                            {
                                ?>
                                <form action="include/aanvraagVerwijderen.script.php" method="post">
                                    <button class="btn btn-primary"
                                            style="margin-top: 10px; margin-right: 30px; margin-left: 10px;"
                                            type="submit">Aanvraag verwijderen
                                    </button>
                                </form>
                                <?php
                            } else
                            {
                                ?>
                                <form action="include/aanvraagAanmaken.script.php" method="post">
                                    <button class="btn btn-primary"
                                            style="margin-top: 10px; margin-right: 30px; margin-left: 10px;"
                                            type="submit">Nieuwe aanvraag
                                    </button>
                                </form>
                                <div class="align-self-end">Nog geen aanvraag gedaan.</div>
                                <?php
                            }
                            }
                        ?>
                        
                        
                        <?php
                        if (($_SESSION["type"]) == "SLB")
                        { //Voor slb'ers)
    
    
                            ?>
    
                            <h3 class="mt-5">Overzicht aanvragen</h3>
    
                            <form action="vragenform/studbegvragen.php" method="post">
                                <button class="btn btn-primary"
                                        style="margin-top: 10px; margin-right: 30px; margin-left: 10px; margin-bottom: 20px"
                                        type="submit">Nieuwe aanvraag
                                </button>
                                <td>
    
                            </form>
                            <div class="col-sm-12 col-md-6">
                                <div class="card" style="height: 400px;">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-12">
                    
                                            <table class="table is-bordered">
                                                <tr>
                                                    <!-- Table Header. -->
                                                    <th>Studentennummer</th>
                                                    <th>Naam</th>
                                                </tr>
                        
                        
                                                <?php
                            
                                                    $sql = "SELECT studentnummer, naam_student FROM slb where id = '$id'";
                                                    $result = $conn->query($sql);
                            
                                                    if ($result->rowCount() > 0)
                                                    {
                                                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                                                        {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row["studentnummer"] ?></td>
                                                                <td><?php echo $row["naam_student"]; ?></td>
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
    
                            <?php
                        }
                            if (($_SESSION["type"]) == "decaan")
                            { //Voor decanen)

                        ?>
                        
                        <h3 class="mt-5">Overzicht aanvragen</h3>
    
                        <form action="vragenform/decvragen.php" method="post">
                            <button class="btn btn-primary"
                                    style="margin-top: 10px; margin-right: 30px; margin-left: 10px; margin-bottom: 20px"
                                    type="submit">Nieuwe aanvraag
                            </button>
                            <td>
    
                        </form>
                        <div class="col-sm-12 col-md-6">
                            <div class="card" style="height: 400px;">
                                <div class="row">
                                    <div class="col-sm-2 col-md-12">
                    
                                        <table class="table is-bordered">
                                            <tr>
                                                <!-- Table Header. -->
                                                <th>Studentennummer</th>
                                                <th>Naam</th>
                                            </tr>
                        
                        
                        
                                            <?php
                            
                                                $sql = "SELECT studentnummer, naam_student FROM decaan where id = '$id'";
                                                $result = $conn->query($sql);
                            
                                                if ($result->rowCount() > 0)
                                                {
                                                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row["studentnummer"] ?></td>
                                                            <td><?php echo $row["naam_student"] ; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                }
                                            ?>
                                        </table>
                
                                    </div>
                                </div>
                            </div>
    
                        </div>
                                        
                                        </table>
                
                                    </div>
                                </div>
                            </div>
    
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
