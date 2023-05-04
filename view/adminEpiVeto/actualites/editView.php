<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de la page d'accueil - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>

<?php require_once '../../structure/headerView.php' ?>


    <main class="container">
        <h2>Modification de la page d'accueil</h2>
        <form method="POST" action="" enctype="multipart/form-data" class="formAjout" novalidate>
           

            <div>
                <label for="bandeau">Nouveau bandeau :</label>
                <textarea name="bandeau" id="bandeau" cols="100" rows="2"><?= $bandeau ?></textarea>
                              <p>Rappel Le bandeau peut faire maximum 100 caractères.</p>

            </div>
            <div>
                <label for="carouselUn">Carousel Un :</label>
                <input type="file" name="carouselUn" id="carouselUn" >
                <span class="error"><?= isset($error['carouselUn']) ?$error['carouselUn'] : ""?></span>
            </div>
            <div>
                <label for="carouselDeux">Carousel Deux :</label>
                <input type="file" name="carouselDeux" id="carouselDeux" >
                <span class="error"><?= isset($error['carouselDeux']) ?$error['carouselDeux'] : ""?></span>
            </div>

          
            <div class="annulAjout">
                <a href="../"><button class="btnInput" type="button">Annuler</button></a>
                <input class="btn" type="submit" name="ajout" value="Modifier">
            </div>

        </form>
    </main>
    <?php include_once '../../structure/footerView.php' ?>
