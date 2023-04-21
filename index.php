<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION);

$id = 1;

$bandeau = getActualiteById($id)['bandeau'];
$carouselUn =getActualiteById($id)['carousel_un'];
$carouselDeux =getActualiteById($id)['carousel_deux'];

//dd($bandeau);
//$role = $_SESSION['role'];
include './view/indexView.php';
