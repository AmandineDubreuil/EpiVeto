<header>
    <?php if (isConnected()) : ?>
        <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
    <?php endif  ?>
    <nav>
        <h3>niveau 1</h3>
        <a id="logo" href="../index.php"><img src="./assets/img/logo.JPG" alt=""></a>
        <ul class="nivUn">
            <li><a href="../index.php">Accueil</a></li>
            <li> <a href="../clinique.php">La Clinique</a>
                <ul class="nivDeux">
                    <li><a href="../equipements.php">Nos Équipements</a></li>
                </ul>
            </li>
            <li><a href="../equipe.php">L'Équipe</a></li>
            <li><a href="https://www.clubvetshop.fr/mon-veterinaire/clinique-veterinaire-epi-veto" target="blank">Boutique</a></li>

            <?php if (isAdminConnected()) : ?>
                <li>
                    <a class="btn" href="index.php" role="button">Admin</a>
                    <ul class="nivDeux">
                        <li><a href="./equipe/index.php">Gestion de l'Equipe</a></li>

                    </ul>
                <?php endif ?>
                </li>
                <a class="btnInput" href="../login/deconnexion.php">Se déconnecter</a>