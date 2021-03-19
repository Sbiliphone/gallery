<?php
require('../templates/header.php');

require('../templates/menu.php');


function printImg(){

?>
<div style="display: none">
<?php
global $db;
$sql = "SELECT * FROM immagine ;";
$rs = $db->execute($sql);
?></div>
<?php

    foreach ($rs as $result) {


        ?>
        <center>
            <div style="width: 300px; height: 300px">
                <h4><?php echo $result['titolo'] ?></h4>

                <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px">

                <br>


                <button onclick="location.href='index.php?action=edith-image'" class="btn btn-secondary">Edit</button>



                <?php
/*
                $utente  = $_SESSION['username'];
                global $db;
                $sql="SELECT isAdmin FROM app_user WHERE username='$utente';";
                $rs = $db->execute($sql);
*/

// 1 o true
                if($_SESSION['Admin']){
                    ?>
                    <button onclick="location.href='index.php?action=delete-image'" class="btn btn-secondary">Delete</button>
                    <?php
                }
                ?>

            </div>
        </center>
        <?php
    }

}

?>
