<header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite']?> <?= $_SESSION['nom']?></p>
        <?php endif  ?>
<nav>
            <a id="logo" href="index.php"><img src="./assets/img/logo.JPG" alt=""></a>
            <ul class="nivUn">
                <li><a href="index.php">Accueil</a></li>
                <li> <a href="clinique.php">La Clinique</a>
                    <ul class="nivDeux">
                        <li><a href="equipements.php">Nos Équipements</a></li>
                    </ul>
                </li>
                <?php if (isConnected()) : ?>
                    <?php if (isAdminConnected()) : ?>
                        <a class="btn"  href="./adminEpiVeto/index.php" role="button">Admin</a>
                    <?php endif ?>
                    <a class="btnInput"  href="./login/deconnexion.php">Se déconnecter</a>
                <?php else : ?>
                    <a class="btnInput" href="./login/">Se connecter</a>
                <li><a href="register/index.php">Inscription</a></li>
                <?php endif ?>
            </ul>
        </nav>
</header>