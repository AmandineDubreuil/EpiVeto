<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de compte - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
<?php require_once '../../structure/headerView.php' ?>



    <main>
        <h2>Modification d'un compte utilisateur</h2>

        <form method="POST" class="formRegister" novalidate>
            <div id="nomPrenom">
                <div class="civilite">
                    <label for="civilite">Civilité :</label>
                    Madame <input type="radio" name="civilite" id="civilite" value="Madame">
                    Monsieur <input type="radio" name="civilite" id="civilite" value="Monsieur">
                </div>
                <div>
                    <label for="prenom">Prénom *</label>
                    <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>" placeholder="<?= $prenom ?>" required>
                </div>
                <div>
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" id="nom" value="<?= $nom ?>" placeholder="<?= $nom ?>" required>
                </div>
            </div>

            <div id="contact">
                <div>
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" name="telephone" id="telephone" value="<?= $telephone ?>" placeholder="<?= $telephone ?>" required> 
                </div>

                <div>
                    <label for="email">E-mail *</label>
                    <input type="email" name="email" id="email" value="<?= $email ?>" placeholder="<?= $email ?>"required>
                </div>
                <div class="role">
                    <label for="role">Rôle :</label>
                    client <input type="radio" name="role" id="role" value="client">
                    admin <input type="radio" name="role" id="role" value="admin">
                </div>


            </div>
            <div class="annulModif">
                <a href="./"><button class="btnVarianteGris" type="button">Annuler</button></a>
                <input class="btnVarianteRouge" type="submit" name="ajout" value="Modifier">

            </div>

            <?php if (!empty($errors)) : ?>
                <div class="errors">
                    <ul class="errors">
                        <li><?= $errors ?></li>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p>* Informations obligatoires</p>


       


    </main>
    <?php include_once '../../structure/footerView.php' ?>
