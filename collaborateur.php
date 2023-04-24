<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION);
$idActualite = 1;

$bandeau = getActualiteById($idActualite)['bandeau'];
(isGetIdValid()) ? $id = $_GET['id'] : error404();



$titre = getEmployeById($id)['titre'];

$prenom = getEmployeById($id)['prenom'];
//dd(getEmployeById($id)[0]['titre']);
$nom = getEmployeById($id)['nom'];
$fonction = getEmployeById($id)['fonction'];
$diplome = getEmployeById($id)['diplome'];
$description = getEmployeById($id)['description'];
$photo = getEmployeById($id)['photo'];
$insta = getEmployeById($id)['insta'];
$facebook = getEmployeById($id)['facebook'];






//$role = $_SESSION['role'];
include './view/collaborateurView.php';
