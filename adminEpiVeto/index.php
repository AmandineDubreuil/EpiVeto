<?php
/*
* Page qui appelle la vue pour l'administration du site
*/
session_start();
include '../inc/fonctions.php';
(isAdminConnected()) ?: redirectUrl('view/404.php');


require '../view/adminEpiVeto/indexView.php';
