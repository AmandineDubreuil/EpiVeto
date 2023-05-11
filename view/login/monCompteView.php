<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Connexion - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once '../structure/headerView.php' ?>




    <main class="container">
        <h2>Mon compte Utilisateur</h2>
        <section class="modifPwd">
            <h3>Modification du mot de passe</h3>
            <form method="POST" class="formCRUD" novalidate>

                <div class="modifPwdChamps">
                    <label for="pwdOld">Mot de passe actuel :</label>
                    <input type="password" name="pwdOld" id="pwdOld">
                    <span class="error"><?= isset($error['pwdOld']) ? $error['pwdOld'] : "" ?></span>

                </div>
                <div class="modifPwdChamps">
                    <label for="pwdNew">Nouveau mot de passe :</label>
                    <input type="password" name="pwdNew" id="pwdNew">
                    <span class="error"><?= isset($error['pwdNew']) ? $error['pwdNew'] : "" ?></span>

                </div>
                <div class="modifPwdChamps">
                    <label for="confPwdNew">Confirmation du nouveau mot de passe :</label>
                    <input type="password" name="confPwdNew" id="confPwdNew">
                    <span class="error"><?= isset($error['confPwdNew']) ? $error['confPwdNew'] : "" ?></span>

                </div>
                <div class="annulAjout">
                <a href="./"><button class="btnVarianteGris" type="button">Annuler</button></a>
                <input class="btnVarianteRouge" type="submit" name="ajout" value="Modifier">
            </div>

            </form>
        </section>
    </main>
    <?php include_once '../structure/footerView.php' ?>