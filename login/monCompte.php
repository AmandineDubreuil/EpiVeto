<?php
/*
 * Formulaire de connexion
 */
session_start();
include '../inc/fonctions.php';


(isConnected()) ?: redirectUrl('404.php');

 $id = $_SESSION['id_utilisateur'] ;
// // dd($id);
// (isGetIdValid()) ?: error404();
$verifPwd = getUtilisateurById($id)['pwd'];
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $pwdOld = checkXSSPostValue($_POST['pwdOld']);
    $pwdNew = checkXSSPostValue($_POST['pwdNew']);
    $ConfPwdNew = checkXSSPostValue($_POST['confPwdNew']);
    //traitement champs obligatoire vide

    if (password_verify($pwdOld, $verifPwd)) :

        $error = checkPwdValid($_POST['pwdNew'], 'pwdNew', $error);
        $error = checkPwdConfirm($_POST['pwdNew'], $_POST['confPwdNew'], 'confPwdNew', $error);
//
        if (count($error) === 0) :

            $pwd = $_POST['pwdNew'];

            $modifPwd = updatePwd($id, $pwd);

            redirectUrl('./');

        endif;

        else : 
            $error['pwdOld'] = 'Votre mot de passe n\'est pas reconnu.';

          //  dd($error);
    endif;



endif;

require '../view/login/monCompteView.php';
