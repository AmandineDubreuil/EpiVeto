<?php
/*
* Ajout d'un acte
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');


$acte = $prix = '';

$error = [];

if (isset($_POST['ajout']) && !empty($_POST['ajout'])) :

    // traitement des failles XSS
    foreach ($_POST as $key => $value) :
        $_POST[$key] = checkXSSPostValue($value);

        //traitement champs obligatoire vide
        $error = checkEmptyValue($value, $key, $error);
    endforeach;

    if (!is_numeric($_POST['prix'])) :
        $error['prix'] = "Merci d'entrer une valeur numérique sans chiffre après la virgule.";
    endif;
    // dd($error);
    if (count($error) === 0) :
        $acte = $_POST['acte'];
        $prix = $_POST['prix'];

        insertHonoraire($acte, $prix);
        //   dd(insertHonoraire($acte, $prix));

        redirectUrl('./adminEpiVeto/honoraires');

    endif;
endif;

require '../../view/adminEpiVeto/honoraires/ajoutView.php';
