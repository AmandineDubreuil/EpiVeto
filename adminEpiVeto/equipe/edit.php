<?php
/*
* Mise à jour d'un profil collaborateur
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');


(isGetIdValid()) ? $id = $_GET['id'] : error404();
$associeDb = getEmployeById($id)['associe'];
$prenom = getEmployeById($id)['prenom'];
$nom = getEmployeById($id)['nom'];
$titreDb = getEmployeById($id)['titre'];
$fonctionDb = getEmployeById($id)['fonction'];
$diplome = getEmployeById($id)['diplome'];

$description_pro = getEmployeById($id)['description_pro'];
$description_perso = getEmployeById($id)['description_perso'];

$question_1 = getEmployeById($id)['question_1'];
$question_2 = getEmployeById($id)['question_2'];
$question_3 = getEmployeById($id)['question_3'];
$question_4 = getEmployeById($id)['question_4'];
$question_5 = getEmployeById($id)['question_5'];

$photo_unDb = getEmployeById($id)['photo_un'];
$photo_deuxDb = getEmployeById($id)['photo_deux'];
$photo_troisDb = getEmployeById($id)['photo_trois'];
$photo_quatreDb = getEmployeById($id)['photo_quatre'];

$insta = getEmployeById($id)['insta'];
$facebook = getEmployeById($id)['facebook'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    // traitement des failles XSS
    foreach ($_POST as $key => $value) :

        if ($key !== 'titre' || 'fonction' || 'associe') :
            $_POST[$key] = checkXSSPostValue($value);
        endif;

    endforeach;


    if (isset($_POST['associe'])  && $_POST['associe'] !== $associeDb) :
        $associe = $_POST['associe'];
    else :
        $associe = $associeDb;
    endif;

    if (isset($_POST['titre'])  && $_POST['titre'] !== $titreDb) :
        $titre = $_POST['titre'];
    else :
        $titre = $titreDb;
    endif;

    $prenom = checkXSSPostValue($_POST['prenom']);
    $nom = checkXSSPostValue($_POST['nom']);


    if (isset($_POST['fonction'])  && $_POST['fonction'] !== $fonctionDb) :
        $fonction = $_POST['fonction'];
    else :
        $fonction = $fonctionDb;
    endif;


   
    $diplome = checkXSSPostValue($_POST['diplome']);

    $description_pro = checkXSSPostValue($_POST['description_pro']);
    $description_perso = checkXSSPostValue($_POST['description_perso']);

$photoPath = 'equipe/';

    $photo_unName = $_FILES["photo_unUpload"];
    $photo_un = updatePhoto($photo_unName, $photo_unDb, $photoPath);

    $photo_deuxName = $_FILES["photo_deuxUpload"];
    $photo_deux = updatePhoto($photo_deuxName, $photo_deuxDb, $photoPath);
   
    $photo_troisName = $_FILES["photo_troisUpload"];
    $photo_trois = updatePhoto($photo_troisName, $photo_troisDb, $photoPath);
   
    $photo_quatreName = $_FILES["photo_quatreUpload"];
    $photo_quatre = updatePhoto($photo_quatreName, $photo_quatreDb, $photoPath);

    $question_1 = checkXSSPostValue($_POST['question_1']);
    $question_2 = checkXSSPostValue($_POST['question_2']);
    $question_3 = checkXSSPostValue($_POST['question_3']);
    $question_4 = checkXSSPostValue($_POST['question_4']);
    $question_5 = checkXSSPostValue($_POST['question_5']);

    $insta = checkXSSPostValue($_POST['insta']);
    $facebook = checkXSSPostValue($_POST['facebook']);



    updateEmploye($id, $associe, $prenom, $nom, $titre, $fonction, $diplome, $description_pro, $description_perso, $question_1, $question_2, $question_3, $question_4, $question_5, $photo_un, $photo_deux, $photo_trois, $photo_quatre, $insta, $facebook);
    redirectUrl('adminEpiVeto/equipe');

endif;

require '../../view/adminEpiVeto/equipe/editView.php';
