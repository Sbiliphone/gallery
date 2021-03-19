<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
$id=$_REQUEST['user'];
?>
<div style="display: none">
    <?php
    global $db;
    $sql="SELECT * FROM app_user WHERE id='$id'";
    $rs = $db->execute($sql);
    ?>
</div>
<?php

    foreach($rs as $risultato){
        ?>
        <form name="user" action="index.php?action=updateUser" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group"><label for="user_username" class="required">Username</label><input type="text" id="user_username" name="username" required="required" maxlength="180" class="form-control" readonly value="<?php echo $risultato['username'];?>"></div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group"><label for="user_email" class="required">Email</label><input type="text" id="user_email" name="email" required="required" maxlength="180" class="form-control" value="<?php echo $risultato['email'];?>"></div>
            </div>
                <div class="col-12 mb-3">
                <div class="form-group"><label class="required" for="user_roles">Ruolo</label><select id="user_roles" name="roles" class="form-control"><option value="false" selected="<?php echo ($risultato["isAdmin"]==1) ?  "": "selected"; ?>">User</option><option value=1 selected="<?php echo ($risultato["isAdmin"]==1) ?  "selected": ""; ?>">Admin</option></select></div>
            </div>
            <div class="col-md mb-3">
                <div class="form-group"><label for="user_firstname">Nome</label><input type="text" id="user_firstname" name="firstname" class="form-control" value="<?php echo $risultato['name'];?>"></div>
            </div>
            <div class="col-md mb-3">
                <div class="form-group"><label for="user_lastname">Cognome</label><input type="text" id="user_lastname" name="lastname" class="form-control" value="<?php echo $risultato['lastname'];?>"></div>
            </div>
        </div>
        <input type="hidden" id="id" name="id" value="<?php echo $risultato["id"];?>">
        <button class="btn btn-primary">Salva</button>
        <?php
    }
?>

<?php
    require('../templates/footer.php');
?> 