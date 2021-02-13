<?php
function login()
{
    require('../templates/login.php');
}

function loginCheck()
{
    global $db;
    $username=$_REQUEST['username'];
    $password=md5($_REQUEST['password']);
    $sql="SELECT * FROM app_user WHERE username='$username' AND password='$password'";
    $rs = $db->execute($sql);
    if (count($rs->getRows())>0){
        $_SESSION['authorized']=true;
        header('Location: index.php');
    } else {
        $_SESSION['messaggio']='Credenziali non valide';
        header('Location: index.php?action=login');
    }
}

function logout()
{
    session_destroy();
    header('Location: index.php');

}