<?php
session_start();
include './inc/fonctions.php';
//dd($_SESSION['role']);
$id = 1;

$bandeau = getActualiteById($id)['bandeau'];
//$role = $_SESSION['role'];
include './view/cliniqueView.php';
