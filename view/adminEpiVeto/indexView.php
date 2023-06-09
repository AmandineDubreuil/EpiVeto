<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>
    <?php require_once '../structure/headerView.php' ?>


    <main>

        <h2 id="adminh2">Administration du site</h2>
        <section class="adminAccueilSection">

            <h3>Gestion des actualités</h3>
            <table class="adminTable">
                <thead>
                    <tr>
                        <th>Bandeau</th>
                        <th>Carousel Un</th>
                        <th>Carousel Deux</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $bandeau ?></td>
                        <td><?= $carouselUn ?></td>
                        <td><?= $carouselDeux ?></td>
                    </tr>

                </tbody>
            </table>
            <a class="btnRougeClair" href="./actualites/edit.php?id=<?= $idActualite ?>">Modifier</a>
        </section>
        <section class="adminAccueilSection">
            <div class="">
                <a href="./equipe/index.php">
                    <h3>Gestion de l'équipe</h3>
                </a>
                <p>Permet l'ajout, la modification ou la suppression d'un membre de l'équipe.</p>

                <a class="btnRougeClair" href="./equipe/index.php">
                    <p>Aller</p>
                </a>
            </div>

            <div class="">
                <a href="./honoraires/index.php">
                    <h3>Gestion des honoraires</h3>
                </a>
                <p>Permet l'ajout, la modification ou la suppression d'un acte et de son prix.</p>

                <a class="btnRougeClair" href="./honoraires/index.php">
                    <p>Aller</p>
                </a>
            </div>

            <div class="">
                <a href="./conseils/index.php">
                    <h3>Gestion des fiches conseils</h3>
                </a>
                <p>Permet l'ajout, la modification ou la suppression d'une fiche conseils.</p>

                <a class="btnRougeClair" href="./conseils/index.php">
                    <p>Aller</p>
                </a>
            </div>
        </section>

    </main>
    <?php include_once '../structure/footerView.php' ?>