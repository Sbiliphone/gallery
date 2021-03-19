<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
?>

<?php
    global $db;
    $sql = "SELECT * FROM app_user ;";
    $rs = $db->execute($sql);

?>

<div class="container">
    <div class="d-flex">
        <h3>Utenti</h3>

        <a href="index.php?action=nuovo" class="btn btn-primary btn-sm ms-auto my-auto">Crea utente</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <td>Admin</td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($rs as $risultato){
                    ?>
                    <tr>
                        <th><?php echo $risultato['username'];?></th>
                        <th><?php echo $risultato['email'];?></th>
                        <th><?php echo $risultato['name'];?></th>
                        <th><?php echo $risultato['lastname'];?></th>
                        <th><?php echo $risultato['isAdmin'];?></th>
                        <th><form method="post" action="index.php?action=deleteUser"><input type="hidden" id="user" name="user" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Elimina</button>
                        </form></th>
                        <th><form method="post" action="index.php?action=modifyUser"><input type="hidden" id="user" name="user" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Modifica</button>    
                        </form></th>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
    require('../templates/footer.php');
?> 