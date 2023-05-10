<?php
session_start();
include '../inc/fonctions.php';

$id = 1;

$bandeau = getActualiteById($id)['bandeau'];

$categorie = $_GET['cat'];





//dd($_GET);



include '../view/conseils/listeCategorieView.php';
