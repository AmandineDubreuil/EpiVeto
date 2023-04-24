<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION);
$idActualite = 1;

$bandeau = getActualiteById($idActualite)['bandeau'];
(isGetIdValid()) ? $id = $_GET['id'] : error404();



$titre = getEmployeById($id)['titre'];

$prenom = getEmployeById($id)['prenom'];
$nom = getEmployeById($id)['nom'];
$fonction = getEmployeById($id)['fonction'];
$associe =  getEmployeById($id)['associe'];
$diplome = getEmployeById($id)['diplome'];

$description_pro = getEmployeById($id)['description_pro'];
$description_perso = getEmployeById($id)['description_perso'];

$question_1 = getEmployeById($id)['question_1'];
$question_2 = getEmployeById($id)['question_2'];
$question_3 = getEmployeById($id)['question_3'];
$question_4 = getEmployeById($id)['question_4'];
$question_5 = getEmployeById($id)['question_5'];

$photo_un = getEmployeById($id)['photo_un'];
$photo_deux = getEmployeById($id)['photo_deux'];
$photo_trois = getEmployeById($id)['photo_trois'];
$photo_quatre = getEmployeById($id)['photo_quatre'];

$insta = getEmployeById($id)['insta'];
$facebook = getEmployeById($id)['facebook'];






//$role = $_SESSION['role'];
include './view/collaborateurView.php';
