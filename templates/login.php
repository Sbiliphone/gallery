<?php
require('../templates/header.php');
?>




<?php
if (isset(  $_SESSION['messaggio'])){
    echo   $_SESSION['messaggio'];
}
?>



<form method="post" action="?action=login-check">
    Username:
    <input type="text" name="username">

    Password:
    <input type="password" name="password">
<button>Accedi</button>
</form>


<?php
require('../templates/footer.php');
?>
