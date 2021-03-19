<?php
require('../templates/header.php');

require('../templates/menu.php');



    $pronto = 0;

    if(isset($_FILES['fileToUpload'])){
        $target_dir = "./uploades/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

    // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

    // Check file size
        if ($_FILES["fileToUpload"]["size"] > 100000000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

    // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

    // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                global $db;
                $nome = $_FILES["fileToUpload"]["name"];
                // titolo immagine
                $titiolo = "gggg";
                //
                $utente  = $_SESSION['username'];
                $sql = "INSERT INTO immagine (src, titolo, utente) VALUES('$nome','$titiolo','$utente' );";
                $rs = $db->execute($sql);
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                $pronto = 1;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }



    ?>



<html>

<div style="text-align: center">
    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" name="titolo" id="titolo" placeholder="Titolo">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">

    </form>
</div>

</html>

