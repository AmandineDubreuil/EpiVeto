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
        <h2>Mon compte Utilisateur</h2>
        <section class="modifPwd">
            <h3>Modification du mot de passe</h3>
        <form method="POST" class="formConnexion">
            
            <div>
                <label for="pwdOld">Mot de passe actuel :</label>
                <input type="password" name="pwdOld" id="pwdOld" >
            </div>
            <div>
                <label for="pwdNew">Nouveau mot de passe :</label>
                <input type="password" name="pwdNew" id="pwdNew" >
            </div>
            <div>
                <label for="confPwdNew">Confirmation du nouveau mot de passe :</label>
                <input type="password" name="confPwdNew" id="confPwdNew" >
            </div>
            <div>
                <input class="btn" type="submit" value="Modification">
            </div>
          
        </form>
    </section>
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
