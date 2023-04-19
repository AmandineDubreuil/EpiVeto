<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
        <?php endif  ?>
        <nav>
            <a id="logo" href="index.php"><img src="./assets/img/logo.JPG" alt=""></a>
            <ul class="nivUn">
                <li><a href="index.php">Accueil</a></li>
                <li> <a href="clinique.php">La Clinique</a>
                    <ul class="nivDeux">
                        <li><a href="equipements.php">Nos Équipements</a></li>
                    </ul>
                </li>
                <li><a href="equipe.php">L'Équipe</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Création d'un compte utilisateur</h2>

        <form method="POST" class="formRegister">
            <div id="nomPrenom">
                <div class="civilite">
                    <label for="civilite">Civilité :</label>
                    Madame <input type="radio" name="civilite" id="civilite" value="Madame">
                    Monsieur <input type="radio" name="civilite" id="civilite" value="Monsieur">
                </div>
                <div>
                    <label for="prenom">Prénom *</label>
                    <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>" required>
                    <span class="error"><?= isset($error['prenom']) ? $error['prenom'] : "" ?></span>
                </div>
                <div>
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" id="nom" value="<?= $nom ?>" required>
                    <span class="error"><?= isset($error['nom']) ? $error['nom'] : "" ?></span>
                </div>
            </div>

            <div id="contact">
                <div>
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" name="telephone" id="telephone" value="<?= $telephone ?>">
                    <span class="error"><?= isset($error['telephone']) ? $error['telephone'] : "" ?></span>
                </div>

                <div>
                    <label for="email">E-mail *</label>
                    <input type="email" name="email" id="email" required value="<?= $email ?>">
                    <span class="error"><?= isset($error['email']) ? $error['email'] : "" ?></span>
                </div>
                <div class="password">
                    <div>
                        <label for="pwd">Mot de passe *</label>
                        <input type="password" name="pwd" id="pwd" required value="<?= $pwd ?>">
                        <span class="error"><?= isset($error['pwd']) ? $error['pwd'] : "" ?></span>
                    </div>
                    <div>
                        <label for="confPwd">Confirmation du mot de passe *</label>
                        <input type="password" name="confPwd" id="confPwd" required value="<?= $confPwd ?>">
                        <span class="error"><?= isset($error['confPwd']) ? $error['confPwd'] : "" ?></span>
                    </div>
                </div>
            </div>
            <div>
                <input class="btn" type="submit" name="submitted" value="Inscription">
            </div>
            <?php if (!empty($errors)) : ?>
                <div class="errors">
                    <ul class="errors">
                        <li><?= $error ?></li>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p>* Informations obligatoires</p>


        <?php include_once '../structure/sideView.php' ?>


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