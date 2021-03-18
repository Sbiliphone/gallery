<?php
require('../templates/header.php');

require('../templates/menu.php');


function printImg(){

    echo "1";

    global $db;
    $sql = "SELECT * FROM immagine ;";
    $rs = $db->execute($sql);
    foreach ($rs as $result) {
        echo "2";

        ?>
        <img src="<?php echo $result['src']; ?>" style="height: 100px; width: 200px">
<?php
    }


}

?>
