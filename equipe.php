<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION);
$id = 1;

$bandeau = getActualiteById($id)['bandeau'];
$veterinaires = 'Vétérinaire';
$asvs = 'ASV';
//$role = $_SESSION['role'];
include './view/equipeView.php';
