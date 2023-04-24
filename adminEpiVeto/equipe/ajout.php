<?php
/*
* Ajout d'une annonce
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');
//dd($_SESSION['id_utilisateur']);

$associe = $prenom = $nom = $titre = $fonction = $diplome = $description_pro = $description_perso = $question_1 = $question_2 = $question_3 = $question_4 = $question_5 = $photo_unUpload = $photo_deuxUpload = $photo_troisUpload = $photo_quatreUpload = $insta = $facebook = '';

$error = [];

if (isset($_POST['ajout']) && !empty($_POST['ajout'])) :
    $photo_unUpload =  $_FILES["photo_unUpload"];
    $photo_deuxUpload =  $_FILES["photo_deuxUpload"];
    $photo_troisUpload =  $_FILES["photo_troisUpload"];
    $photo_quatreUpload =  $_FILES["photo_quatreUpload"];

    // // photo un
    //     if (!empty($photo_un["name"])) :
    //      //   dd($photo_un);
    //         uploadPhoto($photo_un);
    //         $photo_unName = $photo_un["name"];
    //     endif;
    //     if ($photo_unName) :
    //         $photo_un = "./uploads/equipe/" . basename($photo_un["name"]);
    //     else :
    //         $photo_un = "";
    //     endif;



    // traitement des failles XSS
    foreach ($_POST as $key => $value) :

        if ($key !== 'titre' || 'fonction') :
            $_POST[$key] = checkXSSPostValue($value);
        endif;

        //traitement champs obligatoire vide
        if ($key !== 'associe' && $key !== 'insta' && $key !== 'facebook' && $key !== 'description_pro' && $key !== 'description_perso' && $key !== 'question_1' && $key !== 'question_2' && $key !== 'question_3' && $key !== 'question_4' && $key !== 'question_5'  && $key !== 'photo_unUpload' && $key !== 'photo_deuxUpload' && $key !== 'photo_troisUpload' && $key !== 'photo_quatreUpload') :
            $error = checkEmptyValue($value, $key, $error);
        endif;

    endforeach;
    //dd($_POST); 

    if (count($error) === 0) :
        $associe = $_POST['associe'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $titre = $_POST['titre'];
        $fonction = $_POST['fonction'];
        $diplome = $_POST['diplome'];

        $description_pro = $_POST['description_pro'];
        $description_perso = $_POST['description_perso'];

        $question_1 = $_POST['question_1'];
        $question_2 = $_POST['question_2'];
        $question_3 = $_POST['question_3'];
        $question_4 = $_POST['question_4'];
        $question_5 = $_POST['question_5'];

        $photo_un = insertPhoto($photo_unUpload);
        $photo_deux = insertPhoto($photo_deuxUpload);
        $photo_trois = insertPhoto($photo_troisUpload);
        $photo_quatre = insertPhoto($photo_quatreUpload);

        $insta = $_POST['insta'];
        $facebook = $_POST['facebook'];

        insertEmploye($associe, $prenom, $nom, $titre, $fonction, $diplome, $description_pro, $description_perso, $question_1, $question_2, $question_3, $question_4, $question_5, $photo_un, $photo_deux, $photo_trois, $photo_quatre, $insta, $facebook);


        redirectUrl('./adminEpiVeto/equipe');
    endif;
endif;

require '../../view/adminEpiVeto/equipe/ajoutView.php';
