<?php
    $files = scandir('uploades/');
    ?>
     <button class="btn btn-primary" onclick="location.href = 'caricaImmagini.php'" style="width: 170px">Aggiungi Immagine</button><br><br>
    <?php
    foreach($files as $file) {

        $url ='uploades/'.$file;
        if($url ==='uploades/.' || $url ==='uploades/..'   ){

        }else{
            ?>
            <img src="<?php echo$url; ?>" style="height: 100px; width: 200px">
            <?php
        }
    }
?>
