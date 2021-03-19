<?php
require('../templates/header.php');

require('../templates/menu.php');


function printImg(){


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


                <button onclick="location.href='index.php?action=edith-image'" class="btn btn-secondary">Edit</button>



                <?php

                $utente  = $_SESSION['username'];
                global $db;
                $sql="SELECT isAdmin FROM app_user WHERE username='$utente';";
                $rs = $db->execute($sql);

                echo $rs;



                $valore = $rs;

                echo $valore;

                //splittare

                $pattern = "/ /";
                $chars = preg_split($pattern, $rs, -1, PREG_SPLIT_DELIM_CAPTURE);


                for($i=0;$i<count($chars);$i++) {
                    echo "'" . $chars[$i] . "'<br />\n";
                }



                if($rs === $valore){
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
