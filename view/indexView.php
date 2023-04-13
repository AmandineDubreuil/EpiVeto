<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epi-Véto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['prenom'] ?> !</p>
        <?php endif ?>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="clinique.php">La Clinique</a>
        </nav>
    </header>
    <main>
        <h1>Epi-Véto</h1>

        <section class="presentation">
            <p>
                Bienvenue à Epi-Véto !
                Nous sommes une équipe de professionnels, dévoués à fournir des soins de qualité pour vos compagnons à quatre pattes. Notre clinique offre une gamme complète de services vétérinaires, allant de la médecine préventive à la chirurgie avancée.
            </p>
            <div class="imgPresentation">
                <div><img src="./assets/img/epiveto.jpg" alt="Epi-Véto"></div>
                <p>Chez nous, vous trouverez une atmosphère chaleureuse et accueillante pour vous et votre animal de compagnie. Nous nous engageons à offrir un service personnalisé et attentionné à chaque patient, tout en travaillant en étroite collaboration avec vous pour assurer la meilleure santé possible de votre animal.

                    Notre équipe est composée de vétérinaires qualifié(e)s, et d'ASV (Auxiliaire Spécialisé Vétérinaire) compétent(e)s, tous animés par une passion commune pour les animaux. Nous sommes équipés d'installations modernes et à la pointe de la technologie pour garantir des soins de qualité supérieure à tous les animaux qui nous sont confiés.</p>
            </div>
            <p>Que vous ayez besoin d'une simple consultation de routine, d'une intervention chirurgicale complexe ou de conseils sur la santé de votre animal, nous sommes là pour vous aider. N'hésitez pas à nous contacter pour en savoir plus sur nos services ou pour prendre rendez-vous avec l'un de nos vétérinaires experts.</p>
        </section>
        <section class="side">
            <div class="trouver">
                <h2>Nous trouver</h2>
                <p class="gras">EPI-VETO clinique vétérinaire La Chaussée d'Ivry</p>
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
        <p>2023 - Epi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
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