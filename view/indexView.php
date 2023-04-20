<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/carousel.js" defer></script>
    <script src="./assets/js/script.js" defer></script>
</head>

<body>

    <header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
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

    <main>
        
            <div id="slider"></div>
        
        <section class="presentation">
            <p>
                Bienvenue à Épi-Véto !
                Nous sommes une équipe de professionnels, dévoués à fournir des soins de qualité pour vos compagnons à quatre pattes. Notre clinique offre une gamme complète de services vétérinaires, allant de la médecine préventive à la chirurgie avancée.
            </p>
            <div class="imgPresentation">
                <div><img src="./assets/img/clinique/epiveto.jpg" alt="Épi-Véto"></div>
                <p>Chez nous, vous trouverez une atmosphère chaleureuse et accueillante pour vous et votre animal de compagnie. Nous nous engageons à offrir un service personnalisé et attentionné à chaque patient, tout en travaillant en étroite collaboration avec vous pour assurer la meilleure santé possible de votre animal.

                    Notre équipe est composée de vétérinaires qualifié(e)s, et d'ASV (Auxiliaire Spécialisé Vétérinaire) compétent(e)s, tous animés par une passion commune pour les animaux. Nous sommes équipés d'installations modernes et à la pointe de la technologie pour garantir des soins de qualité supérieure à tous les animaux qui nous sont confiés.</p>
            </div>
            <p>Que vous ayez besoin d'une simple consultation de routine, d'une intervention chirurgicale complexe ou de conseils sur la santé de votre animal, nous sommes là pour vous aider. N'hésitez pas à nous contacter pour en savoir plus sur nos services ou pour prendre rendez-vous avec l'un de nos vétérinaires experts.</p>
        </section>
        <div class="sideAccueil">
        <?php include_once 'structure/sideView.php' ?>
</div>

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
            <?php endif ?>
        </p>
    </footer>

</body>

</html>