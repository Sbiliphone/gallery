<?php
require('../templates/header.php');
require('../templates/menu.php');
$id=$_REQUEST['id'];

?>
<div style="display: none">
    <?php
    global $db;
    $sql="SELECT titolo, id FROM immagine WHERE id='$id';";
    $rs = $db->execute($sql);

    foreach($rs as $risultato){
        ?>
    </div>

<div style="width: 100% ;padding-left: 15%">
    <form name="user" action="index.php?action=updateImage" method="post">
        <div class="row">
            <label for="titolo" class="required">Titolo</label>
            <input style="width: 200px " type="text" id="titolo" name="titolo" required="required" maxlength="180" class="form-control" value="<?php echo $risultato['titolo'];?>">
        </div>
        <input  type="hidden" id="id" name="id" value="<?php echo $risultato['id']; ?>">
        <button class="btn btn-primary">Salva</button>
    </form>
</div>
    <?php
    }
    ?>







