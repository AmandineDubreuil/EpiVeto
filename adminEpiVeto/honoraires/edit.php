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
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    // traitement des failles XSS

    $acte = checkXSSPostValue($_POST['acte']);
    $prix = checkXSSPostValue($_POST['prix']);

    if (!is_numeric($_POST['prix'])) :
        $error['prix'] = "Merci d'entrer une valeur numérique sans chiffre après la virgule.";
    endif;

    if (count($error) === 0) :

        updateHonoraire($id, $acte, $prix);
        redirectUrl('adminEpiVeto/honoraires');
    endif;
endif;

require '../../view/adminEpiVeto/honoraires/editView.php';
