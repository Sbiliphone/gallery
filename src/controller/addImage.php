<?php
require('../templates/header.php');

require('../templates/menu.php');
?>
    <html>
    <body>

    <div style="text-align: center">
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" name="titolo" id="titolo" placeholder="Titolo">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">

            <ul>
                <?php
                $nome = "uploads//".$_FILES['fileToUpload']['name'];

                ?>

                </li>

            </ul>


        </form>
    </div>
    <?php
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
                $uploadOk = 1;
            } else {
                echo "Il file non è un immagine.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Scusa, il file esiste gia.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 100000000000) {
            echo "Scusa, il tuo file pesa troppo.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Scusa, solo JPG, JPEG, PNG.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Scusa, caricametno non riuscito.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                $nome = $_FILES["fileToUpload"]["name"];
                // titolo immagine

                $titiolo = $_REQUEST['titolo'];

                $utente  = $_SESSION['username'];


                ?>
                <div style="display: none">
                    <?php
                    global $db;
                    $sql = "INSERT INTO immagine (src, titolo, utente) VALUES('$nome','$titiolo','$utente' );";
                    $rs = $db->execute($sql);
                    ?></div>
                <?php

                echo "Il file". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "è stato caricato correttamente.";
                $pronto = 1;
            } else {
                echo '<h4>Scusa, errore durante il caricameto del fiel.</h4> ';
            }
        }
    }


?>
