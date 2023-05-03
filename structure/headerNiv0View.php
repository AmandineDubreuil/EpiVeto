<header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
        <?php endif  ?>
        <nav class="menuPrincipal">
            <a id="logo" href="index.php"><img src="./assets/img/logo.JPG" alt=""></a>
            <ul class="nivUn">
                <li><a href="index.php">Accueil</a></li>
                <li> <a href="clinique.php">La Clinique</a>
                    <ul class="nivDeux">
                        <li><a href="equipements.php">Nos Équipements</a></li>
                    </ul>
                </li>
                <li><a href="equipe.php">L'Équipe</a></li>
                <li><a href="https://www.clubvetshop.fr/mon-veterinaire/clinique-veterinaire-epi-veto" target="blank">Boutique</a></li>
                </ul>
                
        </nav>
        <?php if (!empty($bandeau)) : ?>
            <div class="messagedefilant">
                <div><span><?= $bandeau ?></span></div>
            </div>
        <?php endif; ?>
