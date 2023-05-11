<?php
/*
* Page qui appelle la vue pour l'administration du site
*/
session_start();
include '../inc/fonctions.php';
(isAdminConnected()) ?: redirectUrl('404.php');

$idActualite = 1;

$bandeau = getActualiteById($idActualite)['bandeau'];
$carouselUn =getActualiteById($idActualite)['carousel_un'];
$carouselDeux =getActualiteById($idActualite)['carousel_deux'];

/*
à remettre dans IndexView
<section>
<a href="./utilisateurs/index.php">
    <h3>Gestion des utilisateurs</h3>
</a>
<p>Permet l'ajout, la modification ou la suppression d'un compte utilisateur.</p>

</section>
*/


require '../view/adminEpiVeto/indexView.php';
