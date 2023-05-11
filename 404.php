<?php
/*
* Vue page 404
*/
require './inc/fonctions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" type="module" defer></script>

    <title>404 - Épi-Véto La Chaussée d'Ivry</title>
</head>

<body>

<?php require_once './structure/headerView.php' ?>
 


    <main class="container">
        <h2>Page non trouvée</h2>
        <p>La page que vous cherchiez ne semble pas être là. Elle a peut-être été déplacée ou supprimée, ou il est possible que l'URL saisie était incorrecte.</p>
        <p><a class="btnVarianteGris" href="./">Retour</a></p>
    </main>
</body>

</html>
