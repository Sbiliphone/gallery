<?php
require('../templates/header.php');
?>

<div class="container my-auto">
    <form method="post" action="?action=login-check">
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
        <!--
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me">
            <label class="form-check-label" for="remember_me">Check me out</label>
        </div>
        -->
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
