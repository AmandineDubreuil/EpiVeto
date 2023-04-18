<?php
/*
* Suppression d'un utilisateur
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');



$id = $_GET['id'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();

if (suppUtilisateurById($id)) :
    redirectUrl('adminEpiVeto/utilisateurs/');
   exit();
else :
   exit('Une Erreur s\'est produite !');
endif;
