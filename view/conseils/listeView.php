<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Conseils - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once '../structure/headerView.php' ?>


    <h1><?= $categorie ?>
        <?php if ($sousCategorie !== "*") : ?>
            - <?= $sousCategorie ?>
        <?php endif; ?>
    </h1>

    <main>

        <section>
            <a href="./index.php"><button class="btnGris" type="button">Retour</button></a>
            <div class="conseils listeConseils">
                <?php
                if (count(getConseilByCategorieEtSousCategorie($categorie, $sousCategorie)) != 0) :
                    foreach (getConseilByCategorieEtSousCategorie($categorie, $sousCategorie) as $conseil) : ?>
                        <article class=" cardListeConseil">

                            <h3><?= $conseil['titre'] ?></h3>
                            <p><?= substr($conseil['article'], 0, 100) ?>...</p>

                            <p class="creeModifie">créé le : <?= $conseil['created_at'] ?> - dernière modification le :<?= $conseil['modified_at'] ?> </p>
                            <p class="droite"><a class="btnRouge" href="">Lire la suite</a></p>

                        </article>
                    <?php

                    endforeach;
                else : ?>
                    <div>Aucune fiche conseils n'est présente dans cette section .</div>
                <?php
                endif;
                ?>
            </div>


            <?php include_once '../structure/sideView.php' ?>
        </section>
    </main>
    <?php include_once '../structure/footerView.php' ?>