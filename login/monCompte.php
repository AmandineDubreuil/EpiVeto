<?php
/*
 * Formulaire de connexion
 */
session_start();
include '../inc/fonctions.php';

(isConnected()) ?: redirectUrl('view/404.php');

//dd($_GET['id']);

(isGetIdValid()) ? $id = $_GET['id'] : error404();
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

        if (count($error) === 0) :

            $pwd = $_POST['pwdNew'];

            $modifPwd = updatePwd($id, $pwd);

        redirectUrl();

        endif;
    
    endif;



endif;

require '../view/login/monCompteView.php';
