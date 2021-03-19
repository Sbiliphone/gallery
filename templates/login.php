<?php
require('../templates/header.php');
?>

<div class="container my-auto">
    <form method="post" action="?action=login-check" style="margin-left: 550px">
        <div class="mb-3">
            <div style="margin-left: -90px" class="col-md-6  text-center mb-md-3">
                <h2 class="mb-0">Log in, please.</h2>
                <p>You're almost there, you only need to tell us who you are!</p>
            </div>

            <label for="username" class="form-label">Username</label>
            <input style="width: 200px" type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
            <div id="usernameHelp" class="form-text">Inserisci il tuo nome utente.</div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input style="width: 200px"  type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="col-3 d-flex">
            <img src="./uploades/immagineLogin.png" alt="login" class="img-fluid my-auto">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary">Accedi</button>
            <?php
            if (isset($_SESSION['messaggio'])) {
                ?>
                <div class="text-danger my-auto ms-3"><?= $_SESSION['messaggio']; ?></div>
                <?php
            }
            ?>
        </div>
        </div>

    </form>

</div>

<?php
require('../templates/footer.php');
?>
