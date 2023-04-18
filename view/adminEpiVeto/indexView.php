<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header>
        <?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite']?> <?= $_SESSION['nom']?></p>
        <?php endif  ?>
<nav>
            <a id="logo" href="index.php"><img src="../assets/img/logo.JPG" alt=""></a>
            <ul class="nivUn">
                <li><a href="../index.php">Accueil</a></li>
                <li> <a href="../clinique.php">La Clinique</a>
                    <ul class="nivDeux">
                        <li><a href="../equipements.php">Nos Équipements</a></li>
                    </ul>
                </li>
                <?php if (isConnected()) : ?>
                    <?php if (isAdminConnected()) : ?>
                        <a class="btn"  href="index.php" role="button">Admin</a>
                    <?php endif ?>
                    <a class="btnInput"  href="../login/deconnexion.php">Se déconnecter</a>
                <?php else : ?>
                    <a class="btnInput" href="../login/index.php">Se connecter</a>
                <li><a href="register/index.php">Inscription</a></li>
                <?php endif ?>
            </ul>
        </nav>
</header>

    <main>
        <h2 id="admin">Administration du site</h2>

        <section class="cards">
            <a href="./utilisateurs/index.php"><h3>Gestion des utilisateurs</h3></a>
            <p>Permet l'ajout, la modification ou la suppression d'un compte utilisateur</p>

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
                <a class="btn" href="../adminEpiVeto/index.php" role="button">Administration du site</a>
            <?php endif ?>
            <a class="btnInput" href="../login/deconnexion.php">Se déconnecter</a>
        <?php else : ?>
            <a class="btnInput" href="../login/">Administration du site</a>
        <?php endif ?>
    </footer>


</body>

</html>