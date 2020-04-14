<script>
    $(document).ready(function () {
        $("#reden").change(function () {
            if ($(this).val() == 1) {
                $("#1").show();
            } else {
                $("#1").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 2) {
                $("#2").show();
            } else {
                $("#2").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 3) {
                $("#3").show();
            } else {
                $("#3").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 4) {
                $("#4").show();
            } else {
                $("#4").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 5) {
                $("#5").show();
            } else {
                $("#5").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 6) {
                $("#6").show();
            } else {
                $("#6").hide();
            }
        });

        $("#reden").change(function () {
            if ($(this).val() == 7) {
                $("#7").show();
            } else {
                $("#7").hide();
            }
        });
    });
</script>

<?php
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION); // jpg
    $naam = "test" . '.' . $extension;

    move_uploaded_file($file_tmp, "images/" . $naam);
}
?>

<select id="reden" class="form-control <?php echo (!empty($studvertr_err)) ? 'has-error' : ''; ?>" name="studvertr"
        required>
    <option value="1" selected>Ziekte</option>
    <option value="2">Zwangerschap en bevalling</option>
    <option value="3">Functiestoornis, handicap of chronische ziekte</option>
    <option value="4">Bijzondere familieomstandigheden (ex art 4.2 sub f)</option>
    <option value="5">Een onvoldoende studeerbare opleiding (ex art 4.2 sub g)</option>
    <option value="6">Bedrijven van topsport (ex art 4.2 lid 1 sub a)</option>
    <option value="7">Lidmaatschap opleidingscommissie, Hogeschool medezeggenschapsraad, een
        Academiemedezeggenschapsraad of Dienstenmedezeggenschapsraad (ex art 4.2 sub d)
    </option>
</select>
<div id="uploads"></div>


<div id="1">
        <p>Upload: Verklaring van een arts, een andere hulpverlener of bewijs uit medisch dossier.</p>
        <p>*Informatie die voor de aanvraag niet van belang is, mag worden afgeschermd.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Bericht van afwijzing of toekenning door DUO van een extra jaar studiefinanciering.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Leenfase: screenshot/print waaruit blijkt wat je van DUO ontvangt.</p>
        <p>*Aanvullende beurs is hierbij van belang.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>

<div id="2" style="display:none;">
        <p>Upload: Schriftelijk bewijsstuk. (bijv. geboortekaartje)</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>
<div id="3" style="display:none;">
        <p>Upload: Verklaring van een arts, een andere hulpverlener of bewijs uit medisch dossier.</p>
        <p>*Informatie die voor de aanvraag niet van belang is, mag worden afgeschermd.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Bericht van afwijzing of toekenning door DUO van een extra jaar studiefinanciering.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Leenfase: screenshot/print waaruit blijkt wat je van DUO ontvangt.</p>
        <p>*Aanvullende beurs is hierbij van belang.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>
<div id="4" style="display:none;">
        <p>Upload: Schriftelijke bewijsstukken. (bijv. verklaring van hulpverlener of familieleden. Of
            bewijsstuk uit een (medisch) dossier. Bij overlijden van een familielid volstaat een scan van
            de rouwkaart.)</p>
        <p>*Informatie die voor de aanvraag niet van belang is, mag worden afgeschermd.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>
<div id="5" style="display:none;">
        <p>Upload: Bewijsstukken (bijvoorbeeld mailwisselingen, brieven) of een verklaring (van docent,
            teamleider, directeur) waaruit blijkt dat de studie onvoldoende studeerbaar is.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>
<div id="6" style="display:none;">
        <p>Upload: Bewijs van erkenning van de topsport status.</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Studieplan</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Uitdraai van de behaalde studiepunten. (bijv. uit ProgressWWW)</p>
        <input type="file" name="image"/>
</div>
<div id="7" style="display:none;">
        <p>Upload: Bericht van afwijzing of toekenning door DUO van een extra jaar studiefinanciering</p>
        <input type="file" name="image"/>
        <br>
        <br>
        <br>
        <p>Upload: Verklaring van een arts of een andere hulpverlener</p>
        <input type="file" name="image"/>
</div>
<label> NB: Studenten die bestuurslid zijn van een erkende studentenvereniging, zoals benoemd in
    Regeling Profileringsfonds, Artikel 4.1 lid 2a worden via hun erkende studentenverenging
    geïnformeerd over hoe ze aanspraak kunnen maken op financiële ondersteuning. </label>


<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Volgende">
</div>
</form>