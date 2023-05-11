<?php
/*
* Mise à jour d'un article
*/
session_start();
include '../../inc/fonctions.php';

(isAdminConnected()) ?: redirectUrl('view/404.php');

(isGetIdValid()) ? $id = $_GET['id'] : error404();
$titre = getConseilById($id)['titre'];
$article = getConseilById($id)['article'];
$categorieDb = getConseilById($id)['categorie'];
$sousCategorieDb = getConseilById($id)['sous_categorie'];
$imageDb = getConseilById($id)['image'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :


    $titre = checkXSSPostValue($_POST['titre']);
    $article = checkXSSPostValueArticle($_POST['article']);


    if (isset($_POST['categorie']) && $_POST['categorie'] !== $categorieDb) :
        $categorie = [];
        $categorie = $_POST['categorie'];
        $categorieAll = implode(',', $categorie);

    else :
        $categorieAll = $categorieDb;
    endif;

    if (isset($_POST['sousCategorie']) && $_POST['sousCategorie'] !== $sousCategorieDb) :
        $sousCategorie = [];
        $sousCategorie = $_POST['sousCategorie'];
        $sousCategorieAll = implode(',', $sousCategorie);

    else :
        $sousCategorieAll = $sousCategorieDb;
    endif;



    $photoPath = 'conseils/';

    if (isset($_FILES['photoArticleUpload'])) :
        $imageName = $_FILES['photoArticleUpload'];
        $image = updatePhoto($imageName, $imageDb, $photoPath);


    endif;
    updateConseil($id, $titre, $article, $categorieAll, $sousCategorieAll, $image);

    redirectUrl('./adminEpiVeto/conseils');


endif;

require '../../view/adminEpiVeto/conseils/editView.php';
