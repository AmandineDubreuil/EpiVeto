<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La clinique - Épi-Véto La Chaussée d'Ivry</title>
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
        <h1>La clinique </h1>
        <section class="services">
            <h2>Services proposés</h2>
            <ul>
                <li>Médecine et Chirurgie des Animaux de Compagnie</li>
                <li>Laboratoire d'Analyses ( Biochimie, Hématologie, Cytologie ...)</li>
                <li>Radiologie et Echographie Numérique</li>
                <li>Oto-fibroscopie</li>
                <li>Hospitalisation</li>
                <li>Alimentation Physiologique et Diététique</li>
            </ul>
        </section>
        <section class="douleur">
            <h3>Gestion de la douleur</h3>
            <p>La gestion de la douleur, préventive ou curative, est une préoccupation permanente . Les antalgiques sont utilisés systématiquement : anti-inflammatoires stéroïdiens ou non stéroïdiens, et surtout antalgiques majeurs opiacés (butorphanol, buprénorphine, méthadone ...).</p>
            <div><img src="./assets/img/clinique/gros-plan-veterinaire-prenant-soin-animal-compagnie.jpg" alt="Freepik gros plan vétérinaire prenant soin animal compagnie"></div>
        </section>
        <section>
            <h3>Hospitalisation</h3>
            <p>Lors d'hospitalisation supérieure à une demi-journée, les propriétaires sont les bienvenus ( et même souhaités ! ) dans la clinique pour rendre visite à leur animal ; le chenil et sa courette de détente sont accessibles en dehors des heures de chirurgie, de soins ou d'entretien.
            </p>
            <div><img src="./assets/img/clinique/hospitalisation" alt="chat hospitalisé"></div>
        </section>
        <section class="pharmacie">
            <h3>Pharmacie</h3>
            <div>
                <p>Nous fournissons les médicaments que nous presrivons.</p>
                <p>Attention : la loi nous interdit strictement de tenir une officine de pharmacie ouverte, c'est à dire que nous ne pouvons délivrer de médicaments à prescription sur ordonnances qu'aux seuls animaux que nous soignons personnellement. Nous n'avons donc pas le droit de vendre en dehors de nos consultations ces médicaments sauf si nous suivons personnellement les animaux malades , même sur présentation d'une ordonnance d'un confrère.</p>
                <p>Les médicaments à prescription sans ordonnance et tous les autres produits vétérinaires (aliments, jouets ...) sont à votre disposition à l'accueil.</p>
            </div>
            <div><img src="../assets/img/clinique/pills-stethoscope-syringe.jpg" alt="Freepik pills-sthethoscope-syringe"></div>
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