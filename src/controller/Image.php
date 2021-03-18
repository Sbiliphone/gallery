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
        echo $result['src'];

        ?>
        <div style="width: 300px; height: 300px">
            <img src="<?php  echo "uploades/".$result['src'] ?>" style="height: 100px; width: 200px">
            <img src="uploades/img.jpeg" style="height: 100px; width: 200px">

            <!--<button onclick="location.href='index.php?action=rename-image'" class="btn btn-secondary">Rename</button><br><br>-->
            <!--<button onclick="location.href='index.php?action=delete-image'" class="btn btn-secondary">Delete</button>-->
        </div>
<?php
    }


}

?>
