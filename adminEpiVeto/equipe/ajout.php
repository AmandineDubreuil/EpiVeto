<?php
/*
* Ajout d'une annonce
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');
//dd($_SESSION['id_utilisateur']);

$prenom = $nom = $titre = $fonction = $diplome = $description = $photoUpload = $insta = $facebook = '';

$error = [];

if (isset($_POST['ajout']) && !empty($_POST['ajout'])) :

    if (!empty($_FILES["photoUpload"]["name"])) :
    uploadPhoto($_FILES["photoUpload"]["name"]);
    $photoName = $_FILES["photoUpload"]["name"];
    endif;
    

    if ($photoName) :
        $photo = "./uploads/equipe/" . basename($_FILES["photoUpload"]["name"]);
    else :
        $photo = "";
    endif;


    // traitement des failles XSS
    foreach ($_POST as $key => $value) :

        if ($key !== 'titre' || 'fonction') :
            $_POST[$key] = checkXSSPostValue($value);
        endif;

        //traitement champs obligatoire vide
        if ($key !== 'insta' && $key !== 'facebook' && $key !== 'description' && $key !== 'photoUpload') :
            $error = checkEmptyValue($value, $key, $error);
        endif;

    endforeach;
    //dd($_POST); 

    if (count($error) === 0) :

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $titre = $_POST['titre'];
        $fonction = $_POST['fonction'];
        $diplome = $_POST['diplome'];
        $description = $_POST['description'];
        // $photo = $_POST['photo'];  
        $insta = $_POST['insta'];
        $facebook = $_POST['facebook'];

         insertEmploye($associe, $prenom, $nom, $titre, $fonction, $diplome, $description_pro, $description_perso, $question_1, $question_2, $question_3, $question_4, $question_5, $photo_un, $photo_deux, $photo_trois, $photo_quatre, $insta, $facebook);


        redirectUrl('./adminEpiVeto/equipe');
    endif;
endif;

require '../../view/adminEpiVeto/equipe/ajoutView.php';
