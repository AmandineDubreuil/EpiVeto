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


    <h1>Nos Conseils <?= $categorie ?></h1>

    <main>

        <a href="./index.php"><button class="btnVarianteGris" type="button">Retour</button></a>

        <section class="conseilsCategorie">

            <div class="imgRonde"><img src="../assets/img/animaux/<?= $categorie ?>.jpg" alt="chien"></div>
            <div>
                <h3>Nos conseils pour les <?= $categorie ?></h3>
                <ul>
                    <li><a href="liste.php?cat=<?= $categorie ?>&souscat=Alimentation"><i class="fa-solid fa-paw"></i> Alimentation</a></li>
                    <li><a href="liste.php?cat=<?= $categorie ?>&souscat=Santé"><i class="fa-solid fa-paw"></i> Santé</a></li>
                    <li><a href="liste.php?cat=<?= $categorie ?>&souscat=Reproduction"><i class="fa-solid fa-paw"></i> Reproduction</a></li>
                    <li><a href="liste.php?cat=<?= $categorie ?>&souscat=Éducation"><i class="fa-solid fa-paw"></i> Éducation</a></li>
                    <li><a href="liste.php?cat=<?= $categorie ?>&souscat=Infos"><i class="fa-solid fa-paw"></i> Infos Pratiques</a></li>
                </ul>
            </div>

        </section>

        <?php include_once '../structure/sideView.php' ?>

    </main>
    <?php include_once '../structure/footerView.php' ?>