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




require '../view/adminEpiVeto/indexView.php';
