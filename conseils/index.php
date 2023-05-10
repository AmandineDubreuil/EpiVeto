<?php
session_start();
include '../inc/fonctions.php';

//bandeau
$id = 1;
$bandeau = getActualiteById($id)['bandeau'];

$chiens = 'chiens';
$chats = 'chats';
$nac = 'nac';
$infos = 'infos';

$alimentation = 'alimentation';
$sante = 'sante';
$reproduction = 'reproduction';
$education = 'education';
$infosSousCategorie = 'infos';

include '../view/conseils/indexView.php';
