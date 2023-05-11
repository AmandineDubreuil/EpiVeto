<?php
/*
* Mise à jour d'un utilisateur
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('404.php');


(isGetIdValid()) ? $id = $_GET['id'] : error404();


$civiliteDb = getUtilisateurById($id)['civilite'];
$prenom = getUtilisateurById($id)['prenom'];
$nom = getUtilisateurById($id)['nom'];
$telephone = getUtilisateurById($id)['telephone'];
$email = getUtilisateurById($id)['email'];
$roleDb = getUtilisateurById($id)['role'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $civiliteModif = checkXSSPostValue($_POST['civilite']);
    $prenom = checkXSSPostValue($_POST['prenom']);
    $nom = checkXSSPostValue($_POST['nom']);
    $telephone = checkXSSPostValue($_POST['telephone']);
    $email = checkXSSPostValue($_POST['email']);
    $roleModif = checkXSSPostValue($_POST['role']);

    if (!empty($civiliteModif) && $civiliteModif !== $civiliteDb) :

        $civilite = $civiliteModif;
    else :
        $civilite = $civiliteDb;

    endif;

    if (!empty($roleModif) && $roleModif !== $roleDb) :

        $role = $roleModif;
    else :
        $role = $roleDb;

    endif;

    updateUtilisateur($id, $civilite, $prenom, $nom, $telephone, $email, $role);
    redirectUrl('adminEpiVeto/utilisateurs/');
    exit();
endif;

require '../../view/adminEpiVeto/utilisateurs/editView.php';
