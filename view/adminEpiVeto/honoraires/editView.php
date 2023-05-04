<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un acte - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../assets/js/scriptAdmin.js" defer></script>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
<?php require_once '../../structure/headerView.php' ?>


    <main class="container">
        <h2>Nouvel Acte</h2>
        <form method="POST" action="" class="formCRUD" novalidate>
            <div class="actePrix">
                <div>
                    <label for="acte">Acte :</label>
                    <input type="text" name="acte" id="acte" value="<?= $acte ?>">
                   <span class="error"><?= isset($error['acte']) ? $error['acte'] : "" ?></span>
                </div>
                <div>
                    <label for="prix">Prix :</label>
                    <p> <input type="text" name="prix" id="prix" value="<?= $prix ?>"> € TTC</p>
                    <span class="error"><?= isset($error['prix']) ? $error['prix'] : "" ?></span>
                </div>
            </div>

            <div class="annulAjout">
                <a href="../"><button class="btnGris" type="button">Annuler</button></a>
                <input class="btnRougeClair" type="submit" name="ajout" value="Modifier">
            </div>

        </form>
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