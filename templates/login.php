<?php
require('../templates/header.php');
?>

<div class="container my-auto">
    <form method="post" action="?action=login-check">
        <div class="col-md-6 offset-md-3 text-center mb-md-3">
            <h2 class="mb-0">Log in, please.</h2>
            <p>You're almost there, you only need to tell us who you are!</p>

        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
            <div id="usernameHelp" class="form-text">Inserisci il tuo nome utente.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <div id="usernameHelp" class="form-text">Scrivi la tua password solo nella tua mente, non su un post-it.
            </div>
        </div>
        <div class="col-3 d-flex">
            <img src="/assets/images/undraw_Login_re_4vu2.svg" alt="login" class="img-fluid my-auto">
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
    </form>
</div>

<?php
require('../templates/footer.php');
?>
