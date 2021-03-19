<?php
    $id=$_REQUEST['user'];

    global $db;
    $sql="DELETE FROM app_user WHERE id='$id'";
    $rs = $db->execute($sql);

    header('Location: index.php?action=users-list');
?>