<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Connexion - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>

<?php require_once '../structure/headerView.php' ?>



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
                <input class="btnVarianteRouge" type="submit" value="Connexion">
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
    <?php include_once '../structure/footerView.php' ?>
