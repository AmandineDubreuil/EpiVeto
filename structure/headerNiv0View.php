<header>
    <?php if (isConnected()) : ?>
        <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
    <?php endif  ?>
    <nav class="menuPrincipal">
        <a id="logo" href="index.php"><img src="./assets/img/logo.JPG" alt=""></a>
        <div class="burgerSwitch">
            <input type="checkbox" id="sidebar" />
            <label for="sidebar" class="burger"><i class="fas fa-bars"></i></label>
            <label for="sidebar" class="cross"><i class="fas fa-times"></i></label>
        </div>

        <div class="menu">

            <div class="menu-category">
                <a href="index.php" class="menu-item" id="accueil">Accueil</a>
            </div>
            <div class="menu-category">
                <a href="#" class="menu-item" id="clinique">La Clinique <i class="fas fa-caret-down"></i></a>
                <div class="menu-category-items">
                    <a href="clinique.php" class="menu-item"><div> Notre Clinique</div></a>
                    <a href="equipements.php" class="menu-item"><div> Nos Équipements</div></a>
                    <a href="#" class="menu-item"><div> Nos Honoraires</div></a>
                </div>
            </div>
            <div class="menu-category">
                <a href="equipe.php" class="menu-item" id="equipe">L'Équipe</a>
            </div>
            <div class="menu-category">
                <a href="#" class="menu-item" id="clinique">Les Conseils <i class="fas fa-caret-down"></i></a>
                <div class="menu-category-items">
                    <a href="#" class="menu-item"><div> Chiens</div></a>
                    <a href="#" class="menu-item"><div> Chats</div></a>
                    <a href="#" class="menu-item"><div> NAC</div></a>
                    <a href="#" class="menu-item"><div> Infos Utiles</div></a>
                </div>
            </div>
            <div class="menu-category">
                <a href="https://www.clubvetshop.fr/mon-veterinaire/clinique-veterinaire-epi-veto" target="blank" class="menu-item" id="boutique">La Boutique</a>
            </div>

        </div>

    </nav>
    <?php if (!empty($bandeau)) : ?>
        <div class="messagedefilant">
            <div><span><?= $bandeau ?></span></div>
        </div>
    <?php endif; ?>
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