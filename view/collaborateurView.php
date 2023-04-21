<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Équipe - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

<?php require_once './structure/headerNiv0View.php' ?>
               
            </ul>
        </nav> 
        <h1>L'Équipe</h1>
    </header>

    <main>
       
        <section class="collaborateur">
            <h2><?= $titre ?> <?= $nom ?> <?= $prenom ?></h2>
            <h3><?= $fonction ?></h3>
            <div class="collaborateurImg">
                <div class="imgRonde">
                    <?php if (file_exists($photo)) : ?>
                        <img src="<?= $photo ?>" alt="">
                    <?php else : ?>
                        <img src="./uploads/equipe/Image.jpg" alt="">
                    <?php endif; ?>
                </div>
            </div>
            <p class="gras"><?= $diplome ?></p>
            <p><?= nl2br($description) ?></p>

            <?php include_once 'structure/sideView.php' ?>
        </section>
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