<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
<?php require_once '../../structure/headerView.php' ?>


    <main>
        <div class="accueilAdminHonoraires">
            <a href="../">
                <h2 id="admin">Administration du site</h2>
            </a>
            <a href="../"><button class="btnGris" type="button">Retour</button></a>
        </div>
        <div class="adminHonoraires">
            <h3>Gestion des honoraires</h3>

            <a href="./ajout.php" class="btnRouge">Ajouter un acte</a>

            <?php
            if (count(getHonoraires()) != 0) : ?>
                <table class="adminTable">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Acte</th>
                            <th>Prix</th>
                            <th>Modifié le</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php //dd(getArticleLimit($limit, $offset)) 
                        ?>
                        <?php foreach (getHonoraires() as $key => $value) : ?>
                            <tr>
                                <td>
                                    <a class="btnRougeClair" href="./edit.php?id=<?= $value['id_acte'] ?>">Modifier</a>
                                    <a class="btnRougeFonce" href="./supp.php?id=<?= $value['id_acte'] ?>" onclick="return confirm('Confirmer la suppression de cet acte ?');">Supprimer</a>
                                </td>
                                <td><?= $value['acte'] ?></td>
                                <td><?= $value['prix'] ?> €</td>
                                <td><?= $value['modified_at'] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Aucun acte !</p>
            <?php endif; ?>



        </div>


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