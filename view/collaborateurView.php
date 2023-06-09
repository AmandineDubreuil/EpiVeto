<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Équipe - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once './structure/headerView.php' ?>


    <h1>L'Équipe</h1>


    <main>

        <section class="collaborateur">
            <a href="./equipe.php"><button class="btnVarianteGris" type="button">Retour</button></a>

            <div class="nomCollabo">
                <h2><?= $titre ?> <?= $nom ?> <?= $prenom ?></h2>
                <?php if ($associe == 'oui') : ?>
                    <h3>Associé - <?= $fonction ?></h3>
                <?php else : ?>
                    <h3><?= $fonction ?></h3>
                <?php endif; ?>
                <div class="reseaux">
                    <?php if (!empty($insta)) : ?>
                        <a href="<?= $insta ?>" target="blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($facebook)) : ?>
                        <a href="<?= $facebook ?>" target="blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <?php endif; ?>
                </div>
                <div class="imgHaut">
                    <div><img src="<?= $photo_deux ?>" alt=""></div>
                </div>
            </div>

            <div class="descriptionGenerale">
                <div class="descriptionPro">
                    <h3>Côté Pro...</h3>
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
                <?php if (!empty($description_perso)) : ?>
                    <div class="descriptionPerso">
                        <div>
                            <h3>Côté Perso...</h3>
                            <p><?= nl2br($description_perso) ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (!empty($question_1 || $question_2 || $question_3 || $question_4 || $question_5)) : ?>
                <div class="parentQuestions">
                    <div class="questions">
                        <h3>Quelques questions...</h3>
                        <div>
                            <p>Au questionnaire Épi-Véto, <?= $prenom ?> <?= $nom ?> a répondu : </p>
                        </div>
                        <?php if (!empty($question_1)) : ?>

                            <div>
                                <p class="gras"><i class="fa-solid fa-paw"></i> Qu'est-ce qui me plait le plus à Épi-Véto ?</p>
                                <p><?= $question_1 ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($question_2)) : ?>
                            <div>
                                <p class="gras"><i class="fa-solid fa-paw"></i> Quel est mon mot médical préféré ?</p>
                                <p><?= $question_2 ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($question_3)) : ?>
                            <div>
                                <p class="gras"><i class="fa-solid fa-paw"></i> Quel est l'animal (espèce) que je préfère ?</p>
                                <p><?= $question_3 ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($question_4)) : ?>
                            <div>
                                <p class="gras"><i class="fa-solid fa-paw"></i> Quelle phrase idiote / expression m'agace ?</p>
                                <p><?= $question_4 ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($question_5)) : ?>
                            <div>
                                <p class="gras"><i class="fa-solid fa-paw"></i> Quelle est ma devise personnelle ?</p>
                                <p><?= $question_5 ?></p>
                            </div>
                    </div>
                <?php endif; ?>

                </div>
            <?php endif; ?>

            <div class="imgBas">

                <div> <?php if (file_exists($photo_trois)) : ?>
                        <img src="<?= $photo_trois ?>" alt="">
                    <?php endif; ?>
                </div>
                <div><?php if (file_exists($photo_quatre)) : ?>
                        <img src="<?= $photo_quatre ?>" alt="">

                    <?php endif; ?>
                </div>
            </div>
            <?php include_once 'structure/sideView.php' ?>
        </section>
    </main>
    <?php include_once 'structure/footerView.php' ?>