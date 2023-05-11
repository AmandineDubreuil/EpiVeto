<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Conseils - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once '../structure/headerView.php' ?>



    <main id="styleCKEditor">
         <a href="./">Retour</a>
        <section id="ficheConseils">
                       
            <div class="imgRonde"><img src=".<?= $image ?>" alt=""></div>
            <div><?= $article ?></div>
            <p class="creeModifie">créé le : <?= $cree ?> - modifié le : <?= $modifie ?></p>

        </section>

        <?php include_once '../structure/sideView.php' ?>


    </main>
    <?php include_once '../structure/footerView.php' ?>