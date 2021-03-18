<?php
require('../templates/header.php');

require('../templates/menu.php');

printImg();

function printImg(){

    echo "1";

    $files = scandir('uploades/');

    echo $files;

    foreach($files as $file) {

        $url ="uploades/".$file;
        echo "1";

        if($url ==='uploades/.' || $url ==='uploades/..'   ){

        }else{
            ?>
            <img src="<?php echo $url; ?>" style="height: 100px; width: 200px">
            <?php
        }


    }
    echo "2";
}

?>
