<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Utilisateurs - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
    <?php require_once '../../structure/headerView.php' ?>


    <main>
        <div class="accueilAdminUtilisateurs">
            <h3>Gestion des utilisateurs</h3>
            <a href="../"><button class="btnVarianteGris" type="button">Retour</button></a>
        </div>
        <section class="adminEquipe">


            <?php
            if (count(getUtilisateurs()) != 0) : ?>
                <table class="adminTable">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>E-mail</th>
                            <th>Rôle</th>
                            <th>Créé le</th>
                            <th>Modifié le</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        ?>
                        <?php foreach (getUtilisateurs() as $key => $value) : ?>
                            <tr>
                                <td>
                                    <a class="btnRougeClair" href="./edit.php?id=<?= $value['id_utilisateur'] ?>">Modifier</a>
                                    <a class="btnRougeFonce" href="./supp.php?id=<?= $value['id_utilisateur'] ?>" onclick="return confirm('Souhaitez-vous confirmer la suppression de cet utilisateur ?');">Supprimer</a>
                                </td>

                                <td><?= $value['id_utilisateur'] ?></td>
                                <td><?= $value['nom'] ?></td>
                                <td><?= $value['prenom'] ?></td>
                                <td><?= $value['telephone'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['role'] ?></td>
                                <td><?= $value['created_at'] ?></td>
                                <td><?= $value['modified_at'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Aucun utilisateur !</p>
            <?php endif; ?>



        </section>


    </main>
    <?php include_once '../../structure/footerView.php' ?>