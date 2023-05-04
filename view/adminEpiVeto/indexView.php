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
    <?php require_once '../structure/headerNiv1View.php' ?>


    </ul>
    </nav>
    </header>

    <main>
        <h2 id="admin">Administration du site</h2>

        <section class="adminAccueilSection">
            <h3>Gestion des actualités</h3>
            <table class="adminTable">
                <thead>
                    <tr>
                        <th>Bandeau</th>
                        <th>Carousel Un</th>
                        <th>Carousel Deux modif marche pas</th>
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
            <a href="./equipe/index.php">
                <h3>Gestion de l'équipe</h3>
            </a>
            <p>Permet l'ajout, la modification ou la suppression d'un membre de l'équipe.</p>

            <a class="btnRougeClair" href="./equipe/index.php">
                <p>Aller</p>
            </a>
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