<?php

$verw = "";
$leeg1_err = $leeg2_err = $leeg3_err = $leeg4_err = $leeg5_err = $leeg6_err = $studvertr_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if ($_POST["inschrijving"] === "Selecteer een optie:")
    {
        $leeg1_err = "selecteer reden van aanvraag.";
    }

    if ($_POST["opleiding"] === "Selecteer een optie:")
    {
        $leeg2_err = "selecteer reden van aanvraag.";
    }

    if ($_POST["opleidingvar"] === "Selecteer een optie:")
    {
        $leeg3_err = "selecteer reden van aanvraag.";
    }

    if ($_POST["studiejaar"] === "Selecteer een optie:")
    {
        $leeg4_err = "selecteer reden van aanvraag.";
    }

    if ($_POST["onderbr"] === "Selecteer een optie:")
    {
        $leeg5_err = "selecteer reden van aanvraag.";
    }

    if ($_POST["uitschr"] === "Selecteer een optie:")
    {
        $leeg6_err = "selecteer reden van aanvraag.";
    }





    if ($_POST["studvertr"] === "Selecteer een optie:")
    {
        $studvertr_err = "selecteer reden van aanvraag.";
    }
    elseif ($_POST["studvertr"] === "Ziekte of zwangerschap en bevalling")
    {

        $verw = "lijst1.php";

    }
    elseif ($_POST["studvertr"] === "Een functiestoornis, handicap of chronische ziekte")
    {

        $verw = "lijst2.php";

    }
    elseif ($_POST["studvertr"] === "Bijzondere familieomstandigheden")
    {

        $verw = "lijst3.php";

    }
    elseif ($_POST["studvertr"] === "Een onvoldoende studeerbare opleiding")
    {

        $verw = "lijst4.php";

    }
    elseif ($_POST["studvertr"] === "De door de hogeschool toegekende status van topsporter")
    {

        $verw = "lijst5.php";

    }
    elseif ($_POST["studvertr"] === "Andere dan de in de hierboven genoemde onderdelen bedoelde omstandigheden die, indien
                                een daarop gebaseerd verzoek om financiële ondersteuning door het College van Bestuur niet
                                zou worden gehonoreerd, zouden leiden tot een onbillijkheid van overwegende aard")
    {

        $verw = "lijst6.php";

    }
    elseif ($_POST["studvertr"] === "Activiteiten op bestuurlijk of maatschappelijk gebied die naar het oordeel van het College van
                                Bestuur mede in het belang zijn van de hogeschool of van het onderwijs dat de student volgt")
    {

        $verw = "lijst7.php";

    }

    echo $_POST["inschrijving"];

    echo $verw;

}
?>
