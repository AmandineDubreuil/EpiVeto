<?php
session_start();
include '../inc/fonctions.php';

$id = 1;

$bandeau = getActualiteById($id)['bandeau'];

$categorie = $_GET['cat'];
$sousCategorie = $_GET['souscat'];



//dd($_GET);



include '../view/conseils/listeView.php';
