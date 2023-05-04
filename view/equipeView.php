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
   
        <h2>Nos Vétérinaires</h2>
        <section class="veterinaires">


            <?php
            if (count(getEmployesByFonction($veterinaires)) != 0) :
                foreach (getEmployesByFonction($veterinaires) as $veterinaire) : ?>
                    <article class="card">
                        <div class="imgRonde">
                            <?php if (!empty($veterinaire['photo_un'])) : ?>
                                <img src="<?= $veterinaire['photo_un'] ?>" alt="">
                            <?php else : ?>
                                <img src="./uploads/equipe/Image.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="cardEquipe">
                            <h3><?= $veterinaire['titre'] ?> <?= $veterinaire['nom'] ?> <?= $veterinaire['prenom'] ?></h3>
                            <p><?= $veterinaire['diplome'] ?></p>
                            <div class="reseaux">
                                <?php if (!empty($veterinaire['insta'])) : ?>
                                    <a href="<?= $veterinaire['insta'] ?>" target="blank"><i class="fa-brands fa-square-instagram"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($veterinaire['facebook'])) : ?>
                                    <a href="<?= $veterinaire['facebook'] ?>" target="blank"><i class="fa-brands fa-square-facebook"></i></a>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($veterinaire['description_pro'])) : ?>
                                <a href="collaborateur.php?id=<?= $veterinaire['id_employe'] ?>" class="btnRouge">En savoir plus</a>
                            <?php endif; ?>
                        </div>
                    </article>
            <?php
                endforeach;
            else :
                echo 'Aucun(e) vétérinaire enregistré(e).';
            endif;
            ?>


        </section>
        <h2>Nos ASV</h2>
        <section class="asv">

            <?php
            if (count(getEmployesByFonction($asvs)) != 0) :
                foreach (getEmployesByFonction($asvs) as $asv) : ?>
                    <article class="card">
                        <div class="imgRonde"> <?php if (file_exists($asv['photo_un'])) : ?>
                                <img src="<?= $asv['photo_un'] ?>" alt="">
                            <?php else : ?>
                                <img src="./uploads/equipe/Image.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="cardEquipe">
                            <h3><?= $asv['titre'] ?> <?= $asv['nom'] ?> <?= $asv['prenom'] ?></h3>
                            <p><?= $asv['diplome'] ?></p>
                            <div class="reseaux">
                                <?php if (!empty($asv['insta'])) : ?>
                                    <a href="<?= $asv['insta'] ?>" target="blank"><i class="fa-brands fa-square-instagram"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($asv['facebook'])) : ?>
                                    <a href="<?= $asv['facebook'] ?>" target="blank"><i class="fa-brands fa-square-facebook"></i></a>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($asv['description_pro'])) : ?>
                                <a href="collaborateur.php?id=<?= $asv['id_employe'] ?>" class="btnRouge">En savoir plus</a>
                            <?php endif; ?>
                        </div>
                    </article>
            <?php
                endforeach;
            else :
                echo 'Aucun(e) ASV enregistré(e).';
            endif;
            ?>

        </section>


        <?php include_once 'structure/sideView.php' ?>


    </main>
    <?php include_once 'structure/footerView.php' ?>
