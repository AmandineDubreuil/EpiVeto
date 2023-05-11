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
                <input class="btnVarianteRouge" type="submit" value="Modification">
            </div>
          
        </form>
    </section>
    </main>
    <?php include_once '../structure/footerView.php' ?>
