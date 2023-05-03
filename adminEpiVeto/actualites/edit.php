<?php
session_start();
include '../../inc/fonctions.php';
//dd($_SESSION);

$idActualite = 1;

$bandeau = getActualiteById($idActualite)['bandeau'];
$carouselUnDb =getActualiteById($idActualite)['carousel_un'];
$carouselDeuxDb =getActualiteById($idActualite)['carousel_deux'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') :

$bandeau = checkXSSPostValue($_POST['bandeau']);
$carouselPath ='carousel/';
// carousel Un

$carouselUnName = $_FILES["carouselUn"];
$carouselUn = updatePhoto($carouselUnName, $carouselUnDb, $carouselPath);

//dd($carouselUn);

$carouselDeuxName = $_FILES["carouselDeux"];
$carouselDeux = updatePhoto($carouselDeuxName, $carouselDeuxDb, $carouselPath);


updateActualite($idActualite, $bandeau, $carouselUn, $carouselDeux);
//dd($carouselUn);
redirectUrl('adminEpiVeto');
endif;

require '../../view/adminEpiVeto/actualites/editView.php';
