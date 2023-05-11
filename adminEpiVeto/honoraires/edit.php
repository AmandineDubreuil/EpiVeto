<?php
/*
* Mise à jour d'un acte
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');


(isGetIdValid()) ? $id = $_GET['id'] : error404();

$acte = getHonoraireById($id)['acte'];
$prix = getHonoraireById($id)['prix'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    // traitement des failles XSS
    
    $acte = checkXSSPostValue($_POST['acte']);
    $prix = checkXSSPostValue($_POST['prix']);


   
    updateHonoraire($id, $acte, $prix);
    redirectUrl('adminEpiVeto/honoraires');

endif;

require '../../view/adminEpiVeto/honoraires/editView.php';
