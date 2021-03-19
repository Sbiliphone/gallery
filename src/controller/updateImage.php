<?php
global $db;
$titolo=$_REQUEST['titolo'];

$sql="UPDATE immagini SET titolo= '$titolo';";
$rs = $db->execute($sql);

header('Location:index.php?action=image');
?>