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
        ?>
    </div>

    <div style="width: 1800px; height: 850px;overflow: auto;">
        <?php
        foreach ($rs as $result) {?>
            <div style="width: 300px; height: 350px; padding-left: 10%;display: inline-block;">
                <h4><?php echo $result['titolo'] ?></h4>
                <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px; padding-bottom: 10px">


                <button onclick="location.href='index.php?action=edith-image'" class="btn btn-secondary">Edit</button>
                <?php

                $_SESSION['idImmagine'] = $result['id'];

                if($_SESSION['Admin']){
                    ?>
                    <button onclick="location.href='index.php?action=delete-image'" class="btn btn-secondary">Delete</button>
                    <?php
                }
                ?>
            </div>
            <?php
        }

        ?>
    </div>

<?php
}

?>

<?php
require('../templates/footer.php');
?>
