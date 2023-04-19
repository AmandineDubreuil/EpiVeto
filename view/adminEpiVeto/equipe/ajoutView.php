<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un collaborateur - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>

    <header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
        <?php endif  ?>
        <nav>
            <a id="logo" href="../../index.php"><img src="../../assets/img/logo.JPG" alt=""></a>
            <ul class="nivUn">
                <li><a href="../../index.php">Accueil</a></li>
                <li> <a href="../../clinique.php">La Clinique</a>
                    <ul class="nivDeux">
                        <li><a href="../../equipements.php">Nos Équipements</a></li>
                    </ul>
                </li>
                <li><a href="../../equipe.php">L'Équipe</a></li>
                <?php if (isAdminConnected()) : ?>
                    <li>
                    <a class="btn" href="index.php" role="button">Admin</a>
                    <ul class="nivDeux">
                        <li><a href="./equipe/index.php">Gestion de l'Equipe</a></li>
                        <li><a href="../utilisateurs/index.php">Gestion des Utilisateurs</a></li>
                    </ul>
                <?php endif ?></li>
                <a class="btnInput" href="../login/deconnexion.php">Se déconnecter</a>

            </ul>
        </nav>
    </header>

    <main class="container">
        <h2>Nouveau collaborateur</h2>
        <form method="POST" action="" enctype="multipart/form-data" class="formAjout" novalidate>
            <div class="titre">
                <label for="type">Titre :</label>
                Dr <input type="radio" name="titre" id="titre" value="Dr">
                Mme <input type="radio" name="titre" id="titre" value="Mme">
                Mr <input type="radio" name="titre" id="titre" value="Mr">
                <span class="error"><?= isset($error['titre']) ? $error['titre'] : "" ?></span>

            </div>

            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>">
                <span class="error"><?= isset($error['prenom']) ? $error['prenom'] : "" ?></span>

            </div>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?= $nom ?>">
                <span class="error"><?= isset($error['nom']) ? $error['nom'] : "" ?></span>
            </div>
            <div>
                <label for="fonction">Fonction :</label>
                Vétérinaire <input type="radio" name="fonction" id="fonction" value="Vétérinaire">
                ASV <input type="radio" name="fonction" id="fonction" value="ASV">
                <span class="error"><?= isset($error['fonction']) ? $error['fonction'] : "" ?></span>
            </div>
            <div>
                <label for="diplome">Diplôme :</label>
                <input type="text" name="diplome" id="diplome" value="<?= $diplome ?>">
                <span class="error"><?= isset($error['diplome']) ?$error['diplome'] : ""?></span>
 </div>
            <div>
                <label for="description">Description :</label>
                <textarea name="description" id="description" cols="100" rows="20"><?= $description ?></textarea>
                <span class="error"><?= isset($error['description']) ?$error['description'] : ""?></span>
            </div>

            <div>
                <label for="photoUpload">Photo :</label>
                <input type="file" name="photoUpload" id="photoUpload" value="<?= $photoUpload ?>">
                <span class="error"><?= isset($error['photoUpload']) ?$error['photoUpload'] : ""?></span>
            </div>

            <div>
                <label for="insta">Instagram :</label>
                <input type="url" name="insta" id="insta">
                <span class="error"><?= isset($error['insta']) ?$error['insta'] : ""?></span>
            </div>
            <div>
                <label for="facebook">Facebook :</label>
                <input type="url" name="facebook" id="facebook">
                <span class="error"><?= isset($error['facebook']) ?$error['facebook'] : ""?></span>
            </div>

            <div class="annulAjout">
                <a href="../"><button class="btnInput" type="button">Annuler</button></a>
                <input class="btn" type="submit" name="ajout" value="Ajouter">
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
        <?php endif ?></p>
    </footer>
</body>

</html>