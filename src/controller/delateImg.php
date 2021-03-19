<?php
$id=$_SESSION['idImmagine'];

global $db;
$sql="DELETE FROM immagini WHERE id='$id';";
$rs = $db->execute($sql);
header('Location: index.php?action=image');
?><?php
