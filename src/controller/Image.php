<?php
require('../templates/header.php');

require('../templates/menu.php');


function printImg(){


    echo "1";

    global $db;
    $sql = "SELECT * FROM immagine ;";
    $rs = $db->execute($sql);



    foreach ($rs as $result) {
        echo "2 ";
        echo $result['src'];

        echo $_SESSION['id'];


        ?>
        <center>
            <div style="width: 300px; height: 300px">


                <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px">
                <h3><?php $result['title']?></h3>
                <button onclick="location.href='index.php?action=edith-image'" class="btn btn-secondary">Edit</button>



                <?php

                $utente  = $_SESSION['username'];
                global $db;
                $sql="SELECT isAdmin FROM app_user WHERE username='$utente';";
                $rs = $db->execute($sql);

                echo $rs;


                if($rs == "isAdmin 1"){
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
