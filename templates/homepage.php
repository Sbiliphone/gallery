<?php
require('../templates/header.php');
?>

<?php
require('../templates/menu.php');

global $db;
$sql = "SELECT * FROM immagine ;";
$rs = $db->execute($sql);

foreach ($rs as $result) {


?>
<center>
    <div style="width: 300px; height: 300px">
        <h4><?php echo $result['titolo'] ?></h4>

        <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px">

        <br>

        <?php
}

require('../templates/footer.php');
?>

