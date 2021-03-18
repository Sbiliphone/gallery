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
        require('../src/controller/Access.php');
        login();
        break;
    case 'login-check':
        require('../src/controller/Access.php');
        loginCheck();
        break;
    case 'logout':
        require('../src/controller/Access.php');
        logout();
        break;
    case 'change-password':
        require('../src/controller/Password.php');
        showForm();
        break;
    case 'set-password':
        require('../src/controller/Password.php');
        setPassword();
        break;
    case 'image':
        require('../src/controller/Image.php');
        printImg();
        break;
}