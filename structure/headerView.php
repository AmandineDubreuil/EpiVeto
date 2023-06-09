<header>
    <nav>
        <div class="menuPrincipal">
            <input type="checkbox" id="burgerSwitch" />
            <label for="burgerSwitch" class="burger"><i class="fas fa-bars"></i> Menu</label>
            <label for="burgerSwitch" class="cross"><i class="fas fa-times"></i></label>
            <a id="logo" href="<?= getUrl(''); ?>"><img src="<?= getUrl('assets/img/logoVecto.png'); ?>" alt=""></a>

            <div class="menu">
                <div class="menu-category">
                    <a href="<?= getUrl(''); ?>" class="menu-item" id="accueil">Accueil</a>
                </div>
                <div class="menu-category" id="blocClinique">
                    <a href="" class="menu-item" id="clinique">La Clinique <i class="fas fa-caret-down"></i></a>
                    <div class="menu-category-items">
                        <div>
                            <a href="<?= getUrl('clinique.php'); ?>" class="menu-item">
                                Notre Clinique
                            </a>
                        </div>
                        <div>
                            <a href="<?= getUrl('equipements.php'); ?>" class="menu-item">
                                Nos Équipements
                            </a>
                        </div>
                        <div>
                            <a href="<?= getUrl('honoraires.php'); ?>" class="menu-item">
                                Nos Honoraires
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-category">
                    <a href="<?= getUrl('equipe.php'); ?>" class="menu-item" id="equipe">L'Équipe</a>
                </div>
                <div class="menu-category" id="blocConseils">
                    <a href="#" class="menu-item" id="conseils">Les Conseils <i class="fas fa-caret-down"></i></a>
                    <div class="menu-category-items">
                        <div> <a href="<?= getUrl('conseils/index.php'); ?>" class="menu-item">
                                Nos Conseils
                            </a></div>
                        <div> <a href="<?= getUrl('conseils/listeCategorie.php?cat=Chiens'); ?>" class="menu-item">
                                Chiens
                            </a></div>
                        <div> <a href="<?= getUrl('conseils/listeCategorie.php?cat=Chats'); ?>" class="menu-item">
                                Chats
                            </a></div>
                        <div> <a href="<?= getUrl('conseils/listeCategorie.php?cat=NAC'); ?>" class="menu-item">
                                NAC
                            </a></div>
                    </div>
                </div>
                <div class="menu-category">
                    <a href="https://www.clubvetshop.fr/mon-veterinaire/clinique-veterinaire-epi-veto" target="blank" class="menu-item" id="boutique">La Boutique</a>
                </div>
                <?php if (isAdminConnected()) : ?>

                    <div class="menu-category" id="blocAdmin">
                        <a href="#" class="menu-item" id="admin">Admin <i class="fas fa-caret-down"></i></a>
                        <div class="menu-category-items">
                            <div> <a href="<?= getUrl('adminEpiVeto/index.php'); ?>" class="menu-item">
                                    Administration du site
                                </a></div>
                            <div> <a href="<?= getUrl('adminEpiVeto/equipe/index.php'); ?>" class="menu-item">
                                    Gestion de l'équipe
                                </a></div>
                            <div> <a href="<?= getUrl('adminEpiVeto/honoraires/index.php'); ?>" class="menu-item">
                                    Gestion des honoraires
                                </a></div>
                            <div> <a href="<?= getUrl('adminEpiVeto/conseils/index.php'); ?>" class="menu-item">
                                    Gestion des conseils
                                </a></div>
                            <div>
                                <a href="<?= getUrl('login/monCompte.php'); ?>" class="menu-item" id="deconnexion">Mon Compte</a>

                            </div>

                            <div>
                                <a href="<?= getUrl('login/deconnexion.php'); ?>" class="menu-item" id="deconnexion">Se déconnecter</a>

                            </div>
                        </div>
                    </div>
                <?php endif ?>

            </div>
            <div class="reseauxNav">
                <div><a href="https://www.instagram.com/epiveto/" target="blank"><i class="fa-brands fa-square-instagram"></i></a></div>

                <div><a href="https://www.facebook.com/groups/1945557415617763" target="blank"><i class="fa-brands fa-square-facebook"></i></a></div>
            </div>
        </div>
    </nav>

    <?php if (!empty($bandeau)) : ?>
        <div class="messagedefilant">
            <div><span><?= $bandeau ?></span></div>
        </div>
    <?php endif; ?>
</header>