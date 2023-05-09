<?php
/*
* Ajout d'un article
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');


$titreArticle = $article = $photoArticleUpload  = '';

$error = $categorie = $sousCategorie = [];

if (isset($_POST['ajout']) && !empty($_POST['ajout'])) :
    $photoArticleUpload =  $_FILES["photoArticleUpload"];

    foreach ($_POST as $key => $value) :
        //traitement champs obligatoire vide
        if ($key !== 'image') :
            $error = checkEmptyValue($value, $key, $error);
        endif;
    endforeach;
    if (!isset($_POST['categorie'])) :
        $error['categorie'] = "Le champs Catégorie est vide.";
    endif;
    if (!isset($_POST['sousCategorie'])) :
        $error['sousCategorie'] = "Le champs Sous-Catégorie est vide.";
    endif;
  // dd($error);
    if (count($error) === 0) :
        $titreArticle = checkXSSPostValue($_POST['titreArticle']);
        $article = checkXSSPostValue($_POST['article']);
        $categorie = $_POST['categorie'];
        //dd($categorie);
        $categorieAll = implode(',', $categorie);
        $sousCategorie = $_POST['sousCategorie'];
        $sousCategorieAll = implode(',', $sousCategorie);

        $photoPath = 'conseils/';

        $image = insertPhoto($photoArticleUpload, $photoPath);

        insertConseil($titreArticle,  $article,  $categorieAll,  $sousCategorieAll,  $image);

        redirectUrl('./adminEpiVeto/conseils');

else : 
   
    $photoArticleUpload = '';

    endif;
endif;

require '../../view/adminEpiVeto/conseils/ajoutView.php';
