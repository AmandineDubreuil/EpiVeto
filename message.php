<?php
session_start();
 // https://analyse-innovation-solution.fr/publication/fr/php/comment-envoyer-un-mail-en-php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
include './inc/fonctions.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.live.com';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 465;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = 1;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if (isset($_POST['envoyer']) && !empty($_POST['envoyer'])) :

    if ($mail->SMTPAuth) {
        $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
        $mail->Username   =  'amandine.maillet@hotmail.com';    //Adresse email à utiliser
        $mail->Password   =  "l:-)e1K0dc,iflb2cQl'0edcqlR";         //Mot de passe de l'adresse email à utiliser
    }

    $mail->From       = trim($_POST["email_from"]);                //L'email à afficher pour l'envoi
    $mail->FromName   = trim($_POST["email_from_alias"]);          //L'alias de l'email de l'emetteur

    $mail->AddAddress(trim($_POST["email_to"]));

    $mail->Subject    =  $_POST["object"];                      //Le sujet du mail
    $mail->WordWrap   = 50;                    //Nombre de caracteres pour le retour a la ligne automatique
    $mail->AltBody = $_POST["body"];            //Texte brut
    $mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut
    $mail->MsgHTML($_POST["body"]);            //Forcer le contenu du body html pour ne pas avoir l'erreur "body is empty' même si on utilise l'email en contenu alternatif

    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        echo 'Message bien envoyé';
    }
endif;

// fin
include './view/messageView.php';
