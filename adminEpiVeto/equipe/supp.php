<?php
/*
* Suppression d'un membre de l'équipe
*/
session_start();https://fr.wikipedia.org/wiki/CKEditor
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');



$id = $_GET['id'];

(isGetIdValid()) ? $id = $_GET['id'] : error404();


if (!empty(getEmployeById($id)['photo_un'])) :
   unlink('../.' . getEmployeById($id)['photo_un']);

endif;
if (!empty(getEmployeById($id)['photo_deux'])) :
   unlink('../.' . getEmployeById($id)['photo_deux']);

endif;
if (!empty(getEmployeById($id)['photo_trois'])) :
   unlink('../.' . getEmployeById($id)['photo_trois']);

endif;
if (!empty(getEmployeById($id)['photo_quatre'])) :
   unlink('../.' . getEmployeById($id)['photo_quatre']);

endif;

if (suppEmployeById($id)) :
    redirectUrl('adminEpiVeto/equipe/');
   exit();
else :
   exit('Une Erreur s\'est produite !');
endif;
