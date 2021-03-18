<?php
require('../templates/header.php');

require('../templates/menu.php');

function printImg(){
    $files = scandir('uploades/');

    foreach($files as $file) {

        $url ='uploades/'.$file;
        if($url ==='uploades/.' || $url ==='uploades/..'   ){

        }else{
            ?>
            <img src="<?php echo $url; ?>" style="height: 100px; width: 200px">
            <?php
        }
    }
}

?>
