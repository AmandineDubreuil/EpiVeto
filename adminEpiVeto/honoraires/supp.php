<?php
/*
* Suppression d'un acte
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');



$id = $_GET['id'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();


if (suppHonoraireById($id)) :
    redirectUrl('adminEpiVeto/honoraires/');
   exit();
else :
   exit('Une Erreur s\'est produite !');
endif;
