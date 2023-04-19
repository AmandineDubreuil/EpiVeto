<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Connexion - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite']?> <?= $_SESSION['nom']?></p>
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
                <?php if (isConnected()) : ?>
                    <?php if (isAdminConnected()) : ?>
                        <a class="btn"  href="./adminEpiVeto/index.php" role="button">Admin</a>
                    <?php endif ?>
                    <a class="btnInput"  href="./login/deconnexion.php">Se déconnecter</a>
                <?php else : ?>
                    <a class="btnInput" href="./login/index.php">Se connecter</a>
                <li><a href="register/index.php">Inscription</a></li>
                <?php endif ?>
            </ul>
        </nav>
</header>

    <main class="container">
        <h2>Connexion à votre compte</h2>
        <form method="POST" class="formConnexion">
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="pwd">Mot de passe :</label>
                <input type="password" name="pwd" id="pwd" >
            </div>
            <div>
                <input class="btn" type="submit" value="Connexion">
            </div>
            <div class="errors">
                <ul class="errors">
                    <?php foreach ($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            </div>
        </form>
    </main>

    <footer>
        <p>2023 - Épi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
        <div class="legal">
            <p><a href="#">Mentions légales</a> - <a href="">Politique de confidentialité</a></p>
        </div>
        <p></p>
        <?php if (isConnected()) : ?>
            <?php if (isAdminConnected()) : ?>
                <a class="btn" href="./adminEpiVeto/index.php" role="button">Admin</a>
            <?php endif ?>
            <a class="btnInput" href="./login/deconnexion.php">Se déconnecter</a>
        <?php else : ?>
            <a class="btnInput" href="./login/">Administration du site</a>
        <?php endif ?>
    </footer>


</body>

</html>
