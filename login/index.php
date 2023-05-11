<?php
/*
 * Formulaire de connexion
 */
session_start();
include '../inc/fonctions.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $email = checkXSSPostValue($_POST['email']);
    
    $pwd = checkXSSPostValue($_POST['pwd']);

    if ($email) :
        if (findEmail($email)) :
            if (password_verify($pwd, findEmail($email)['pwd'])) :
                $_SESSION['login'] = findEmail($email)['role'];
                $_SESSION['id_utilisateur'] = findEmail($email)['id_utilisateur'];
                $_SESSION['nom'] = findEmail($email)['nom'];
                $_SESSION['civilite'] = findEmail($email)['civilite'];

              //  dd($_SESSION['id_utilisateur']);
                if (findEmail($email)['role'] === 'admin') :
                    redirectUrl('adminEpiVeto/');
                endif;

                redirectUrl();
            else :
                $errors[] = 'La combinaison e-mail / mot de passe n\'est pas reconnue.';
            endif;
        else :
            echo 'Votre e-mail ne semble pas être enregistré sur notre site.<br>';
            echo 'Vous pouvez vous enregister avec <a href="../register">ce formulaire</a>';
            exit();
        endif;

    else :
        $errors[] = 'Merci de bien vouloir saisir une adresse e-mail.';
    endif;


endif;

require '../view/login/indexView.php';
