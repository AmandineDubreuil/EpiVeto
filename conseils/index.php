<?php
session_start();
include '../inc/fonctions.php';

//bandeau
$id = 1;
$bandeau = getActualiteById($id)['bandeau'];

include '../view/conseils/indexView.php';
