<?php
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : 'homepage';

//echo "<hr>Action=$action<hr>";


/* equivalente - idea Daniel C.
$azioniPossibili=['homepage','login','login-check'];
if (is_array($action,$azioniPossibili)) {
    require('../src/controller/' . $action . '.php');
}
*/
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