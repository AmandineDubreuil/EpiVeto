<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION);

$veterinaires = 'Vétérinaire';
$asvs = 'ASV';
//$role = $_SESSION['role'];
include './view/equipeView.php';
