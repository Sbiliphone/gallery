<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">Galleria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=image">Gestione immagini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=users-list">Gestione utenti</a>
                </li>
                <li class="nav-item">
                    <button onclick="location.href='index.php?action=add-image'" class="btn btn-secondary" style="background-color: dodgerblue" >Agiungi immagine</button>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo  $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?action=change-password">Cambia password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?action=logout">Esci</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
