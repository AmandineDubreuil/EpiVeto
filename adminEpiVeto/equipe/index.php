<?php
/*
* Page qui appelle la vue pour l'administration de l'équipe
*/
session_start();
include '../../inc/fonctions.php';
(isAdminConnected()) ?: redirectUrl('view/404.php');


require '../../view/adminEpiVeto/equipe/indexView.php';
