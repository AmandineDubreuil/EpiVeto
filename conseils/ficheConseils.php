<?php
session_start();
include '../inc/fonctions.php';

$idActualite = 1;

$bandeau = getActualiteById($idActualite)['bandeau'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();

$titre = getConseilById($id)['titre'];

$article = getConseilById($id)['article'];
$image = getConseilById($id)['image'];
$cree = getConseilById($id)['created_at'];
$modifie = getConseilById($id)['modified_at'];

include '../view/conseils/ficheConseilsView.php';
