<?php
/*
* Page qui appelle la vue pour l'administration des utilisateurs
*/
session_start();
include '../../inc/fonctions.php';
(isAdminConnected()) ?: redirectUrl('404.php');


require '../../view/adminEpiVeto/utilisateurs/indexView.php';
