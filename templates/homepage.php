<?php
require('../templates/header.php');
?>

<?php
require('../templates/menu.php');
?>

<div style="display: none">

<?php
global $db;
$sql = "SELECT * FROM immagine ;";
$rs = $db->execute($sql);

?>
</div>


    <div style="width: 100%; height: 100%;overflow: auto;">
        <?php
        foreach ($rs as $result) {?>
            <div style="width: 300px; height: 300px; padding-left: 10%;display: inline-block;">
                <h4><?php echo $result['titolo'] ?></h4>
                <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px">
            </div>
            <?php
        }?>
    </div>

<?php
require('../templates/footer.php');
?>