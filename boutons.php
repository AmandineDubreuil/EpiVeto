<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boutons - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php include './inc/fonctions.php';
    require_once 'structure/headerView.php';
    ?>


    <main>





        <table class="adminTable">
            <thead>
                <tr>
                    <th>Bouton</th>
                    <th>Variante</th>
                    <th>Emplacement</th>


                </tr>
            </thead>
            <tbody>

                <?php //dd(getArticleLimit($limit, $offset)) 
                ?>
                <tr>
                    <td>
                        <a href="" class="btnRouge">btnRouge</a>
                    </td>
                    <td> <a href="" class="btnVarianteRouge"><i class="fa-regular fa-paper-plane"></i> message</a>
                    </td>
                    <td>
                        <ul>
                            <li>Side /Message</li>
                            <li>Admin / (Equipe Honoraires Conseils Utilisateurs) ajout d'un article</li>
                            <li>Equipe / en savoir plus</li>
                            <li>Liste / Lire la suite</li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="" class="btnGris">btnGris</a>
                    </td>
                    <td> <a href="" class="btnVarianteGris">Retour</a>
                    </td>

                    <td>
                        <ul>
                            <li>Retour</li>
                            <li>Collaborateur / Retour</li>
                            <li>liste Catégorie / Retour</li>
                            <li>liste / Retour</li>
                            <li>Admin / Index (Equipe Honoraires Conseils Utilisateurs) / retour</li>


                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a class="btnRougeFonce" href="">btnRougeFonce</a>
                    </td>
                    <td>                        <a class="btnRougeFonce" href="">supprimer</a>
</td>

                    <td>
                        <ul>
                            <li>Admin / (Equipe Honoraires Conseils Utilisateurs) suppression d'une ligne</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td>
                        <a class="btnRougeClair" href="">btnRougeClair</a>
                    </td>
                    <td>                        <a class="btnRougeClair" href="">modifier</a>
</td>

                    <td>
                        <ul>
                            <li>Admin / (Equipe Honoraires Conseils Utilisateurs) modification d'une ligne</li>
                            <li>Admin / Index modification bandeau</li>
                            <li>Admin / Index Aller</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td>
                        <a class="btnRetour" href="">btnRetour</a>
                    </td>
                    <td></td>

                    <td>
                        <ul>
                            <li>Fiche conseils / Retour</li>
                        </ul>
                    </td>

                </tr>

            </tbody>
        </table>

        <p>Aucune fiche conseils !</p>





    </main>

    <?php include_once 'structure/footerView.php' ?>