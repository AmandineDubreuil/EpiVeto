<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>

<?php require_once '../../structure/headerNiv2View.php' ?>
            </ul>
        </nav>
</header>

    <main>
        <a href="../"><h2 id="admin">Administration du site</h2></a>
        <a href="../"><button class="btnInput" type="button">Retour</button></a>

        <section class="utilisateurs">
            <h3>Gestion des membres de l'équipe</h3>
           
<a href="./ajout.php" class="btnGris">Ajouter une personne</a>

            <?php 
            if (count(getUtilisateurs()) != 0) : ?>
                <table class="adminTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Créé le</th>
                            <th>Modifié le</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php //dd(getArticleLimit($limit, $offset)) 
                        ?>
                        <?php foreach (getEmployes() as $key => $value) : ?>
                            <tr>
                                <td><?= $value['id_employe'] ?></td>
                                <td><?= $value['nom'] ?></td>
                                <td><?= $value['prenom'] ?></td>
                                <td><?= $value['created_at'] ?></td>
                                <td><?= $value['modified_at'] ?></td>
                                <td>
                                    <a class="btn" href="./edit.php?id=<?= $value['id_employe'] ?>">Modifier</a>
                                    <a class="btnInput"  href="./supp.php?id=<?= $value['id_employe'] ?>" onclick="return confirm('Confirmer la suppression de ce membre de l\'équipe ?');">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Aucun membre de l'équipe !</p>
            <?php endif; ?>



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
        <?php endif ?></p>
    </footer>

</body>

</html>