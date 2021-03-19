<?php
function login()
{
    require('../templates/login.php');
}

function loginCheck()
{
    global $db;
    global $db2;

    $username=$_REQUEST['username'];
    $password=md5($_REQUEST['password']);
    $sql="SELECT * FROM app_user WHERE username='$username' AND password='$password'";

    $sql2 = "SELECT id FROM add_user WEHRE username = '$username' AND password == '$password';";

    $rs2 = $db2->execute($sql2);

    $rs = $db->execute($sql);
    if (count($rs->getRows())>0){
        $_SESSION['authorized']=true;
        $_SESSION['username']=$username;
        $_SESSION['id']= $rs2;
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