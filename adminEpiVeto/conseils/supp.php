<?php
/*
* Suppression d'un article
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');



$id = $_GET['id'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();


if (suppConseilById($id)) :
    redirectUrl('adminEpiVeto/conseils/');
   exit();
else :
   exit('Une Erreur s\'est produite !');
endif;
