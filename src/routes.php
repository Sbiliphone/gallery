<?php
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : 'homepage';

echo "<hr>Action=$action<hr>";


switch ($action){
    case 'homepage':
        require('../src/controller/homepage.php');
        break;
    case 'login':
        require('../src/controller/login.php');
        break;
    case 'login-check':
        require('../src/controller/login-check.php');
        break;

}