<?php
$id=$_REQUEST['id'];

echo $id;

global $db;
$sql="DELETE FROM immagine WHERE id='$id';";
$rs = $db->execute($sql);

header('Location: index.php?action=image');
?><?php
