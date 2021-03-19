<?php
require('../templates/header.php');
require('../templates/menu.php');
$id=$_REQUEST['id'];
?>
<div style="display: none">
    <?php
    global $db;
    $sql="SELECT titolo FROM image WHERE id='$id';";
    $rs = $db->execute($sql);
    ?>
</div>
<?php
foreach($rs as $risultato){
    ?>
<form name="user" action="index.php?action=updateImage" method="post">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-group"><label for="titolo" class="required">Titolo</label><input type="text" id="titolo" name="titolo" required="required" maxlength="180" class="form-control" value="<?php echo $rs['titolo'];?>"></div>
        </div>
        <button class="btn btn-primary">Salva</button>
    </div>
    <?php
}



