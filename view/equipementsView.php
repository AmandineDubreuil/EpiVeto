<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Outils - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

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
                    <a class="btnInput" href="./login/index.php">Se connecter</a>
                <li><a href="register/index.php">Inscription</a></li>
                <?php endif ?>
            </ul>
        </nav>
</header>

    <main>
        <h1>Les Équipements</h1>
        <section class="equipements">
            <div class="card">
                <div><img src="./assets/img/materiel/neovet.jpg" alt="NeoVet"></div>
                <div>
                    <h3>Appareil radio SEDECAL NEOVet</h3>
                    <p>générateur de rayons X Haute Fréquence 20kW : technologie médicale vétérinaire spécifique.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/numeriseurSigma.png" alt="Numérisateur Sigma"></div>
                <div>
                    <h3>Régius SIGMA</h3>
                    <p>système de numérisation à cassettes CRStation d'acquisition numérique et numériseur compact.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/echoLogicF6.png" alt="Echographe Logic F6"></div>
                <div>
                    <h3>Échographe LOGIQ F6</h3>
                    <p>nouvelle génération de plate-forme d'échographie numérique interdisciplinaire (échographie abdominale, échocardiographie ...)</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/vetScanVS2Biochimie.png" alt="VetScan VS2"></div>
                <div>
                    <h3>VetScan VS2</h3>
                    <p>analyseur vétérinaire pour l‘exploration des paramètres biochimiques et hormonaux ; dosage par spectrophotométrie en phase aqueuse de 25 paramètres biochimiques par bilans.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/reflovetPlusBiochimie.png" alt="RefloVet Plus"></div>
                <div>
                    <h3>Reflovet Plus</h3>
                    <p>l'appareil d'analyse biochimique idéal pour les services d'urgence et les suivis ; résultats immédiats.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/vetAbcPlusHematologie.png" alt="Vet ABC Plus"></div>
                <div>
                    <h3>Vet ABC Plus</h3>
                    <p>l'appareil d'hématologie qui permet de réaliser une numération-formule sanguine 4 populations.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/vIPManager.png" alt="vIP Manager"></div>
                <div>
                    <h3>vIP Manager</h3>
                    <p>une console de travail, dédiée au laboratoire, qui assure l‘interface entre les analyseurs de biologie vétérinaire et le logiciel de gestion de clinique ; elle pilote l‘activité technique du laboratoire et permet la connexion de tous les analyseurs de biologie.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/dailyScopeNumerique.jpg" alt="daily Scope Numérique"></div>
                <div>
                    <h3>daily Scope Numérique</h3>
                    <p>vidéo-otoscope rélié à une tablette PC (écran 12") qui permet de voir l'image en direct, de la partager avec les propriétaires mais aussi de pouvoir enregistrer les images grâce au logiciel SICRE. Permet aussi la vidéo-otoscopie interventionnelle.</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/img/materiel/leicaVideoMicroscope.jpg" alt="Vidéo-microscope"></div>
                <div>
                    <h3>Vidéo-microscope</h3>
                    <p>cytologie, bactériologie, etc...</p>
                </div>
            </div>
        </section>
        <section class="maisAussi">
            <div><img src="./assets/img/materiel/rechauf.jpg" alt="rechauf"></div>
            <div><img src="./assets/img/materiel/pompe.jpg" alt="pompe"></div>
            <div>
                <h3>Mais aussi...</h3>
                <p>Anesthésie Gazeuse, Monitoring multi-parametrique per-opératoire, Pompe à perfusion ( "Continuous Range Infusion" : gestion de la douleur par perfusion continue de morphinique), Réchauffeur de perfusion, Tapis chauffants, etc ...</p>
            </div>
            <div><img src="./assets/img/materiel/moniteurAg.jpg" alt="moniteur Ag"></div>
            <div><img src="./assets/img/materiel/ag.jpg" alt="AG"></div>
        </section>
        <?php include_once 'structure/sideView.php' ?>
    </main>

    <footer>
        <p>2023 - Épi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
        <div class="legal">
            <p><a href="#">Mentions légales</a> - <a href="">Politique de confidentialité</a></p>
        </div>
        <p></p>
        <?php if (isConnected()) : ?>
            <?php if (isAdminConnected()) : ?>
                <a class="btn" href="./adminEpiVeto/index.php" role="button">Admin</a>
            <?php endif ?>
            <a class="btnInput" href="./login/deconnexion.php">Se déconnecter</a>
        <?php else : ?>
            <a class="btnInput" href="./login/">Administration du site</a>
        <?php endif ?>
    </footer>


</body>

</html>