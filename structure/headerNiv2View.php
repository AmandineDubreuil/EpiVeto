<header>
    <nav>
        <div class="menuPrincipal">

            <a id="logo" href="../../index.php"><img src="../../assets/img/logo.JPG" alt=""></a>
            <input type="checkbox" id="burgerSwitch" />
            <label for="burgerSwitch" class="burger"><i class="fas fa-bars"></i></label>
            <label for="burgerSwitch" class="cross"><i class="fas fa-times"></i></label>
            <div class="menu">
                <div class="menu-category">
                    <a href="../../index.php" class="menu-item" id="accueil">Accueil</a>
                </div>
                <div class="menu-category">
                    <a href="#" class="menu-item" id="clinique">La Clinique <i class="fas fa-caret-down"></i></a>
                    <div class="menu-category-items">
                        <div>
                            <a href="../../clinique.php" class="menu-item">
                                Notre Clinique
                            </a>
                        </div>
                        <div>
                            <a href="../../equipements.php" class="menu-item">
                                Nos Équipements
                            </a>
                        </div>
                        <div>
                            <a href="#" class="menu-item">
                                Nos Honoraires
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-category">
                    <a href="../../equipe.php" class="menu-item" id="equipe">L'Équipe</a>
                </div>
                <div class="menu-category">
                    <a href="#" class="menu-item" id="conseils">Les Conseils <i class="fas fa-caret-down"></i></a>
                    <div class="menu-category-items">
                        <div> <a href="#" class="menu-item">
                                Chiens
                            </a></div>
                        <div> <a href="#" class="menu-item">
                                Chats
                            </a></div>
                        <div> <a href="#" class="menu-item">
                                NAC
                            </a></div>
                        <div> <a href="#" class="menu-item">
                                Infos Utiles
                            </a></div>
                    </div>
                </div>
                <div class="menu-category">
                    <a href="https://www.clubvetshop.fr/mon-veterinaire/clinique-veterinaire-epi-veto" target="blank" class="menu-item" id="boutique">La Boutique</a>
                </div>
                <?php if (isAdminConnected()) : ?>

                    <div class="menu-category">
                        <a href="#" class="menu-item" id="admin">Admin <i class="fas fa-caret-down"></i></a>
                        <div class="menu-category-items">
                            <div> <a href="../index.php" class="menu-item">
                                    Administration du site
                                </a></div>
                            <div> <a href="../../equipe/index.php" class="menu-item">
                                    Gestion de l'équipe
                                </a></div>
                            <div> <a href="#" class="menu-item">
                                    Gestion des honoraires
                                </a></div>
                            <div> <a href="#" class="menu-item">
                                    Gestion des conseils
                                </a></div>
                                <div>
                                                        <a href="../login/deconnexion.php" class="menu-item" id="deconnexion">Se déconnecter</a>

                                </div>
                        </div>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </nav>

    <?php if (!empty($bandeau)) : ?>
        <div class="messagedefilant">
            <div><span><?= $bandeau ?></span></div>
        </div>
    <?php endif; ?>
            <h3>niveau 2</h3>
 