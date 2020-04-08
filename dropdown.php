<html>
<head>
    <?php
    session_start();
    require "include/stylesheets.php";
    include "DataBase/connectToDatabase.php";
    ?>

    <script>
        $(document).ready(function(){
            $("#reden").change(function(){
                if($(this).val() == 1){
                    $("#1").show();
                }else{
                    $("#1").hide();
                }
            });

            $("#reden").change(function(){
                if($(this).val() == 2){
                    $("#2").show();
                }else{
                    $("#2").hide();
                }
            });

            $("#reden").change(function(){
                if($(this).val() == 3){
                    $("#3").show();
                }else{
                    $("#3").hide();
                }
            });

            $("#reden").change(function(){
                if($(this).val() == 4){
                    $("#4").show();
                }else{
                    $("#4").hide();
                }
            });

            $("#reden").change(function(){
                if($(this).val() == 5){
                    $("#5").show();
                }else{
                    $("#5").hide();
                }
            });

            $("#reden").change(function(){
                if($(this).val() == 6){
                    $("#6").show();
                }else{
                    $("#6").hide();
                }
            });
        });
</script>

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

            <p>Reden van aanvraag:</p>

            <select id="reden">
                <option value="1" selected>Ziekte</option>
                <option value="2">Zwangerschap en bevalling</option>
                <option value="3">Functiestoornis, handicap of chronische ziekte</option>
                <option value="4">Bijzondere familieomstandigheden (ex art 4.2 sub f)</option>
                <option value="5">Een onvoldoende studeerbare opleiding (ex art 4.2 sub g)</option>
                <option value="6">Bedrijven van topsport (ex art 4.2 lid 1 sub a)</option>
            </select>
            <div id="uploads"></div>


            <div id="1"><p>eerste</p></div>
            <div id="2" style="display:none;"><p>tweede</p></div>
            <div id="3" style="display:none;"><p>derde</p></div>
            <div id="4" style="display:none;"><p>vierde</p></div>
            <div id="5" style="display:none;"><p>vijfde</p></div>
            <div id="6" style="display:none;"><p>zesde</p></div>


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