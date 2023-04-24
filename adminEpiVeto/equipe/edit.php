<?php
/*
* Mise à jour d'un profil collaborateur
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');


(isGetIdValid()) ? $id = $_GET['id'] : error404();

$titreDb = getEmployeById($id)['titre'];
$prenom = getEmployeById($id)['prenom'];
$nom = getEmployeById($id)['nom'];
$fonctionDb = getEmployeById($id)['fonction'];
$diplome = getEmployeById($id)['diplome'];
$description_pro = getEmployeById($id)['description_pro'];
$photoDb = getEmployeById($id)['photo'];
$insta = getEmployeById($id)['insta'];
$facebook = getEmployeById($id)['facebook'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $titreModif = checkXSSPostValue($_POST['titre']);
    $prenom = checkXSSPostValue($_POST['prenom']);
    $nom = checkXSSPostValue($_POST['nom']);
    $fonctionModif = checkXSSPostValue($_POST['fonction']);
    $diplome = checkXSSPostValue($_POST['diplome']);
    $description_pro = checkXSSPostValue($_POST['description_pro']);
    $insta = checkXSSPostValue($_POST['insta']);
    $facebook = checkXSSPostValue($_POST['facebook']);

    $photoName = $_FILES["photoUpload"]["name"];
    if (!empty($photoName) && $photoName !== $photoDb) :
      
        unlink('../.' . $photoDb);
        uploadPhoto($photoName);
        $photo = "./uploads/equipe/" . basename($_FILES["photoUpload"]["name"]);

    else :
        $photo = $photoDb;
    endif;

    if (!empty($titreModif) && $titreModif !== $titreDb) :
        $titre = $titreModif;
    else :
        $titre = $titreDb;
    endif;

    if (!empty($fonctionModif) && $fonctionModif !== $fonctionDb) :
        $fonction = $fonctionModif;
    else :
        $fonction = $fonctionDb;
    endif;

updateEmploye($id, $titre, $prenom, $nom, $fonction, $diplome, $description_pro, $photoUn, $insta, $facebook);
redirectUrl('adminEpiVeto/equipe');

endif;

require '../../view/adminEpiVeto/equipe/editView.php';


