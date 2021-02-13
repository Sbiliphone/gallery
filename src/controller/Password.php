<?php
function showForm()
{
    require('../templates/change_password_form.php');
}

function setPassword()
{
    global $db;
    $nuovaPassword = md5($_REQUEST['password']);

    $sql = "UPDATE app_user SET password='$nuovaPassword' WHERE username='" . $_SESSION['username'] . "'";
    $rs = $db->execute($sql);
    header('Location: index.php');
}

