<?php
/*
* Formulaire d'enregistrement d'un nouvel utilisateur
*/
session_start();

require '../inc/fonctions.php';

$civilite = $prenom = $nom = $telephone = $email = $pwd = $confPwd  = '';

$error = [];

if (isset($_POST['submitted']) && !empty($_POST['submitted'])) :
//dd($_POST);
    // traitement des failles XSS
    foreach ($_POST as $key => $value) :
        $_POST[$key] = checkXSSPostValue($value);


        //traitement champs obligatoire vide
        if ($key !== 'prenom') :
            $error = checkEmptyValue($value, $key, $error);
        endif;
    endforeach;
//dd($_POST['prenom']);
    
    $error = checkEmail($_POST['email'], 'email', $error);

    $error = checkPwdValid($_POST['pwd'], 'pwd', $error);
    $error = checkPwdConfirm($_POST['pwd'], $_POST['confPwd'], 'confPwd', $error);


    if (count($error) === 0) :
        echo 'Yata !';
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


    // if ($email && $pwd) :
    //     // if (findEmail($email)) :
    //     //     $errors = 'Cette adresse e-mail existe déjà, vous pouvez vous connecter <a href="../login">ici</a>';
    //     // else :

           
    //     // endif;
    // else :
    //     $errors = 'Votre e-mail ou mot de passe sont incorrect !';
    // endif;
endif;

require '../view/register/indexView.php';
