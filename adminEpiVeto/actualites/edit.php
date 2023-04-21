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

// carousel Un

$carouselUnName = $_FILES["carouselUn"]["name"];
if (!empty($carouselUnName) && $carouselUnName !== $carouselUnDb) :
  
  //  unlink('../.' . $carouselUnDb);
    uploadCarousel($carouselUnName);
    $carouselUn = "./uploads/carousel/" . basename($_FILES["carouselUn"]["name"]);

else :
    $carouselUn = $carouselUnDb;
endif;

$carouselDeuxName = $_FILES["carouselDeux"]["name"];
if (!empty($carouselDeuxName) && $carouselDeuxName !== $carouselDeuxDb) :
  
  //  unlink('../.' . $carouselUnDb);
  //  uploadCarousel($carouselDeuxName);
  //  $carouselDeux = "./uploads/carousel/" . basename($_FILES["carouselDeux"]["name"]);

else :
    $carouselDeux = $carouselDeuxDb;
endif;


updateActualite($idActualite, $bandeau, $carouselUn, $carouselDeux);
//dd($carouselUn);
redirectUrl('adminEpiVeto');
endif;

require '../../view/adminEpiVeto/actualites/editView.php';
