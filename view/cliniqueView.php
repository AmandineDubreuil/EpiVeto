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
                <li><a href="equipe.php">L'Équipe</a></li>
               
            </ul>
        </nav>
</header>

    </header>
    <main>
        <h1>La clinique </h1>
        <section class="services">
            <h2>Services proposés</h2>
            <ul>
                <li><i class="fa-solid fa-paw"></i> Médecine et Chirurgie des Animaux de Compagnie</li>
                <li><i class="fa-solid fa-paw"></i> Laboratoire d'Analyses ( Biochimie, Hématologie, Cytologie ...)</li>
                <li><i class="fa-solid fa-paw"></i> Radiologie et Echographie Numérique</li>
                <li><i class="fa-solid fa-paw"></i> Oto-fibroscopie</li>
                <li><i class="fa-solid fa-paw"></i> Hospitalisation</li>
                <li><i class="fa-solid fa-paw"></i> Alimentation Physiologique et Diététique</li>
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
            <div><img src="./assets/img/clinique/pills-stethoscope-syringe.jpg" alt="Freepik pills-sthethoscope-syringe"></div>
        </section>
        <?php include_once 'structure/sideView.php' ?>
    </main>

    <footer>
        <p>2023 - Épi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
        <div class="legal">
            <p><a href="#">Mentions légales</a> - <a href="">Politique de confidentialité</a></p>
        </div>
        <p>
        <?php if (isConnected()) : ?>
            <?php if (isAdminConnected()) : ?>
                <a href="./adminEpiVeto/index.php" role="button">Page Administrateur</a>
            <?php endif ?>
            <a href="./login/deconnexion.php">Se déconnecter</a>
        <?php else : ?>
            <a class="logAdmin" href="./login/">Administration du site</a>
        <?php endif ?></p>
    </footer>


</body>

</html>