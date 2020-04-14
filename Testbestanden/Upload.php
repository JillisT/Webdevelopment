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


<html>
<body>


<input type="file" name="image"/>
<input type="submit" value="Volgende"/>


</body>
</html>