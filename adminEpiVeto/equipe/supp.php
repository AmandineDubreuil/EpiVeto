<?php
/*
* Suppression d'un membre de l'équipe
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');



$id = $_GET['id'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();

//dd(getEmployeById($id)['photo']);

if (!empty(getEmployeById($id)['photo'])) :
   unlink('../.' . getEmployeById($id)['photo']);

endif;
//dd(getEmployeById($id)['photo']);
if (suppEmployeById($id)) :
    redirectUrl('adminEpiVeto/equipe/');
   exit();
else :
   exit('Une Erreur s\'est produite !');
endif;
