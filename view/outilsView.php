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
            <p class="bienvenue">Bienvenue, <?= $_SESSION['prenom'] ?> !</p>
        <?php endif ?>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li> <a href="clinique.php">La Clinique</a>
                    <ul>
                        <li><a href="outils.php">Les Outils</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Les outils </h1>
        <section class="outils">
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

        <section class="side">
            <div class="trouver">
                <h2>Nous trouver</h2>
                <p class="gras">ÉPI-VETO clinique vétérinaire La Chaussée d'Ivry</p>
                <p>L'Épine de Nantilly</p>
                <p>681 rue de Paçy</p>
                <p>28260 La Chaussée d'Ivry</p>
                <div><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.4748287200927734%2C48.886934993008765%2C1.485879421234131%2C48.89068796034814&amp;layer=mapnik&amp;marker=48.8888114986354%2C1.4803540706634521" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=48.88881&amp;mlon=1.48035#map=17/48.88881/1.48035&amp;layers=N">Afficher une carte plus grande</a></small></div>
            </div>
            <div class="contact">
                <h2>Nous contacter</h2>
                <p>Tél. : 02 37 38 28 33</p>
                <a href="#" class="btnMessage"><i class="fa-regular fa-paper-plane"></i> message</a>
            </div>
            <div class="horaires">
                <h2>Nos horaires</h2>
                <p>La clinique est ouverte du lundi au vendredi de 8h00 à 12h00 et de 14h00 à 19h00.</p>
                <p>Uniquement sur rendez-vous</p>
            </div>
            <div class="reassurance">
                <div>
                    <div><img src="./assets/img/Image.jpg" alt=""></div>
                    <p>Chiens / Chats / Lapins</p>
                </div>
                <div>
                    <div><img src="./assets/img/animaux/veterinaire-prenant-soin-chien-compagnie.jpg" alt="main dans patte"></div>
                    <p>Conseils</p>
                </div>
                <div>
                    <div><img src="./assets/img/animaux/chien-pekinois-stethoscope-isole.jpg" alt="chien stéthoscope"></div>
                    <p>Qualité des soins</p>
                </div>
            </div>
        </section>

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