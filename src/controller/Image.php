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


<div>
<?php
foreach($rs as $result){
    if($result["utente"] === $_SESSION['username'] || $_SESSION['Admin'] ){
    ?>
        <div style="width: 300px; height: 350px; padding-left: 10%;display: inline-block;">
            <form name="user" action="index.php?action=edith-image" method="post">
                <div class="row">

                        <h4><?php echo $result['titolo'] ?></h4>
                        <img src="<?php  echo "./uploades/".$result['src'] ?>" style="height: 100px; width: 200px; padding-bottom: 10px">
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo $result["id"]; ?>">
                <button class="btn btn-primary">Edit</button>
            </form>
        <?php
        if($_SESSION['Admin']){
        ?>
            <form name="user" action="index.php?action=delete-image" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $result["id"]; ?>">
                <button class="btn btn-primary">Elimina</button>
            </form>    <?php
        }
        ?>
        </div>


        <?php
    }
        ?>


    <?php

}


}

?>
</div>
<?php
require('../templates/footer.php');
?>
