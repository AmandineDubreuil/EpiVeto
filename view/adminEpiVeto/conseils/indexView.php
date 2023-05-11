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
        <div class="accueilAdminEquipe">
         
                <h3 id="admin">Gestion des fiches Conseils</h3>
    
            <a href="./"><button class="btnVarianteGris" type="button">Retour</button></a>
        </div>
        <div class="adminEquipe">
   

            <a href="./ajout.php" class="btnVarianteRouge">Ajouter une Fiche Conseils</a>

            <?php
            if (count(getEmployes()) != 0) : ?>
                <table class="adminTable"  id="styleCKEditor">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Titre</th>
                            <th>Catégorie(s)</th>
                            <th>Sous-Catégorie(s) </th>
                            <th>Fiche Conseils</th>
                            <th>Image</th>
                            <th>Créé le</th>
                            <th>Modifié le</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php //dd(getArticleLimit($limit, $offset)) 
                        ?>
                        <?php foreach (getConseils() as $key => $value) : ?>
                            <tr>
                                <td>
                                    <a class="btnRougeClair" href="./edit.php?id=<?= $value['id_conseil'] ?>">Modifier</a>
                                    <a class="btnRougeFonce" href="./supp.php?id=<?= $value['id_conseil'] ?>" onclick="return confirm('Souhaitez-vous confirmer la suppression de cette fiche conseils ?');">Supprimer</a>
                                </td>
                                <td><?= $value['titre'] ?></td>
                                <td><?= $value['categorie'] ?></td>
                                <td><?= $value['sous_categorie'] ?></td>
                                <td><?= substr($value['article'], 0, 50)?>...</td>
                                <td><?= $value['image'] ?></td>
                                <td><?= $value['created_at'] ?></td>
                                <td><?= $value['modified_at'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Aucune fiche conseils !</p>
            <?php endif; ?>



        </div>


    </main>

    <?php include_once '../../structure/footerView.php' ?>