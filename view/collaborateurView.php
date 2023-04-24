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


    <h1>L'Équipe</h1>
    </header>

    <main>

        <section class="collaborateur">
            <div class="imgHaut"><img src="<?= $photo_deux ?>" alt=""></div>
            <div class="nomCollabo">
                <h2><?= $titre ?> <?= $nom ?> <?= $prenom ?></h2>
                <?php if (!empty($associe)) : ?>
                    <h3>Associé</h3>
                <?php endif; ?>
                <h3><?= $fonction ?></h3>
                <div class="reseaux">
                    <?php if (!empty($insta)) : ?>
                        <a href="<?= $insta ?>" target="blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($facebook)) : ?>
                        <a href="<?= $facebook ?>" target="blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="descriptionGénérale">
                <div class="descriptionPro">
                    <p class="gras"><?= $diplome ?></p>
                    <p><?= nl2br($description_pro) ?></p>
                </div>
                <div class="ImgPrincipale">
                    <div class="imgRonde">
                        <?php if (file_exists($photo_un)) : ?>
                            <img src="<?= $photo_un ?>" alt="">
                        <?php else : ?>
                            <img src="./uploads/equipe/Image.jpg" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="descriptionPerso">
                    <p><?= nl2br($description_perso) ?></p>
                </div>
            </div>
            <div class="questions">
                <p>Au questionnaire Épi-Véto, <?= $prenom ?> <?= $nom ?> a répondu : </p>
                <p>1. Qu'est-ce qui me plait le plus à Épi-Véto ?</p>
                <p><?= $question_1 ?></p>
                <p>2. Quel est mon mot médical préféré ?</p>
                <p><?= $question_2 ?></p>
                <p>3. Quel est l'animal (espèce) que je préfère ?</p>
                <p><?= $question_3 ?></p>
                <p>4. Quelle phrase idiote / expression m'agace ?</p>
                <p><?= $question_4 ?></p>
                <p>5. Quelle est ma devise personnelle ?</p>
                <p><?= $question_5 ?></p>
            </div>
            <div class="imgBas">
                <div><img src="<?= $photo_trois ?>" alt=""></div>
                <div><img src="<?= $photo_quatre ?>" alt=""></div>
            </div>
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
            <?php endif ?>
        </p>
    </footer>

</body>

</html>