<?php
/*
* Ajout d'un membre de l'équipe
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');


$associe = $prenom = $nom = $titre = $fonction = $diplome = $description_pro = $description_perso = $question_1 = $question_2 = $question_3 = $question_4 = $question_5 = $photo_unUpload = $photo_deuxUpload = $photo_troisUpload = $photo_quatreUpload = $insta = $facebook = '';

$error = [];
$errorUpload =[];

if (isset($_POST['ajout']) && !empty($_POST['ajout'])) :
    $photo_unUpload =  $_FILES["photo_unUpload"];
    $photo_deuxUpload =  $_FILES["photo_deuxUpload"];
    $photo_troisUpload =  $_FILES["photo_troisUpload"];
    $photo_quatreUpload =  $_FILES["photo_quatreUpload"];

    // traitement des failles XSS
    foreach ($_POST as $key => $value) :

        if ($key !== 'titre' || 'fonction' || 'associe') :
            $_POST[$key] = checkXSSPostValue($value);

        endif;

        //traitement champs obligatoire vide
        if ($key !== 'insta' && $key !== 'facebook' && $key !== 'description_pro' && $key !== 'description_perso' && $key !== 'question_1' && $key !== 'question_2' && $key !== 'question_3' && $key !== 'question_4' && $key !== 'question_5'  && $key !== 'photo_unUpload' && $key !== 'photo_deuxUpload' && $key !== 'photo_troisUpload' && $key !== 'photo_quatreUpload') :
            $error = checkEmptyValue($value, $key, $error);
        endif;


    endforeach;

    if (!isset($_POST['titre'])) :
        $error['titre'] = "Le champs titre est vide.";
    endif;
    if (!isset($_POST['fonction'])) :
        $error['fonction'] = "Le champs fonction est vide.";
    endif;


    // dd($error);
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

        $photoPath = 'equipe/';

        $photo_un = insertPhoto($photo_unUpload, $photoPath);
        $photo_deux = insertPhoto($photo_deuxUpload, $photoPath);
        $photo_trois = insertPhoto($photo_troisUpload, $photoPath);
        $photo_quatre = insertPhoto($photo_quatreUpload, $photoPath);

        $insta = $_POST['insta'];
        $facebook = $_POST['facebook'];

        insertEmploye($associe, $prenom, $nom, $titre, $fonction, $diplome, $description_pro, $description_perso, $question_1, $question_2, $question_3, $question_4, $question_5, $photo_un, $photo_deux, $photo_trois, $photo_quatre, $insta, $facebook);


        redirectUrl('./adminEpiVeto/equipe');
       
        else : 
   
            $photo_unUpload = $photo_deuxUpload = $photo_troisUpload = $photo_quatreUpload = '';
    
    endif;

endif;

require '../../view/adminEpiVeto/equipe/ajoutView.php';
