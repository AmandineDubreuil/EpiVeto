<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Connexion - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<?php require_once '../structure/headerNiv1View.php' ?>

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
