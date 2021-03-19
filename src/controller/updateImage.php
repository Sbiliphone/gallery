<?php
global $db;
$titolo=$_REQUEST['titolo'];
$id=$_REQUEST['id'];

$sql="UPDATE immagine SET titolo='$titolo' WHERE id='$id';";
$rs = $db->execute($sql);

header('Location:index.php?action=image');
?>