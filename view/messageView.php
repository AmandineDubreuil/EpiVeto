<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/js/script.js" type="module" defer></script>
</head>

<body>
    <?php require_once './structure/headerView.php' ?>



    <main>
        <section class="formMessage">

            <form action="" method="post">
                <div>
                    <label for="email_from_alias">Votre nom :</label>
                    <input type="text" name="email_from_alias" maxlength="255" placeholder="Alias de l'email de l'emetteur" />
                    <span class="error"><?= isset($error['email_from_alias']) ? $error['email_from_alias'] : "" ?></span>

                </div>
                <input type="email" name="email_to" maxlength="255" placeholder="Email du destinataire" />
                <div>
                    <label for="email_from">Votre e-mail :</label>
                    <input type="email" name="email_from" maxlength="255" placeholder="Email de l'emetteur" />
                    <span class="error"><?= isset($error['mail']) ? $error['mail'] : "" ?></span>

                </div>
                <div>
                    <label for="object">L'objet du message :</label>
                    <input type="text" name="object" maxlength="255" placeholder="Objet de l'email" />
                    <span class="error"><?= isset($error['sujet']) ? $error['sujet'] : "" ?></span>
                </div>
                <div>
                    <label for="message">Votre message :</label>
                    <textarea name="body" cols="40" rows="20"> </textarea>
                    <span class="error"><?= isset($error['message']) ? $error['message'] : "" ?></span>

                </div>
                <div class="annulAjout">
                    <a href="../"><button class="btnGris" type="button">Annuler</button></a>
                    <input type="submit" name="envoyer" value="Envoyer" />
                </div>

            </form>

        </section>


    </main>
    <?php include_once 'structure/footerView.php' ?>