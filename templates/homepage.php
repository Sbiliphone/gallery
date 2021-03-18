<?php
require('../templates/header.php');
?>

<?php
require('../templates/menu.php');
?>


<?php
$files = scandir('uploades/');

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


<?php
require('../templates/stampaImg.php');
?>

<?php
require('../templates/footer.php');
?>

