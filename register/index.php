<?php
/*
* Formulaire d'enregistrement d'un nouvel utilisateur
*/
session_start();

require '../inc/fonctions.php';

$civilite = $prenom = $nom = $telephone = $email = $pwd = $confPwd = $errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $civilite = cleanData($_POST['civilite']);
    $prenom = cleanData($_POST['prenom']);
    $nom = cleanData($_POST['nom']);
    $telephone = cleanData($_POST['telephone']);
    $email = cleanData($_POST['email']);
    $pwd = cleanData($_POST['pwd']);
    $confPwd = cleanData($_POST['confPwd']);


    if ($email && $pwd) :
        if (findEmail($email)) :
            $errors = 'Cette adresse e-mail existe déjà, vous pouvez vous connecter <a href="../login">ici</a>';
        else :

            if ($pwd !== $confPwd) :
                $errors = "Les deux mots de passe ne sont pas identiques.";

            else :


                $lastIdUtilisateur = insertUtilisateur($civilite, $prenom, $nom, $telephone, $email, $pwd);
                $_SESSION['login'] = findEmail($email)['role'];
                $_SESSION['id_utilisateur'] = findEmail($email)['id_utilisateur'];
                $_SESSION['nom'] = findEmail($email)['nom'];
                $_SESSION['civilite'] = findEmail($email)['civilite'];

                if ($role === 'admin') :
                    redirectUrl('./adminEpiVeto/');
                else :
                    redirectUrl();
                endif;
            endif;

        endif;
    else :
        $errors = 'Votre e-mail ou mot de passe sont incorrect !';
    endif;
endif;

require '../view/register/indexView.php';
