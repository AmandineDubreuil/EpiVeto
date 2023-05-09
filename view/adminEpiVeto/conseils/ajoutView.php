<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un article - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../assets/js/scriptAdmin.js" defer></script>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
    <?php require_once '../../structure/headerView.php' ?>


    <main class="container">
        <h2>Nouvel Article</h2>
        <form method="POST" action="" enctype="multipart/form-data" class="formConseils formCRUD" novalidate>
            <div class="blocTitre">
                <div class="blocTitreArticle">
                    <label for="titreArticle">Titre de l'article :</label>
                    <input type="text" name="titreArticle" id="titreArticle" value="<?= $titreArticle ?>">
                    <div><span class="error"><?= isset($error['titreArticle']) ? $error['titreArticle'] : "" ?></span></div>
                </div>
                <div class="categoriesConseils">
                    <fieldset>
                        <legend>Catégorie(s) :</legend> 
                        <span class="error"><?= isset($error['categorie']) ? $error['categorie'] : "" ?></span>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="chiens">
                            <label for="chiens">Chiens</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="chats">
                            <label for="chats">Chats</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="nac">
                            <label for="nac">NAC</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="infos">
                            <label for="infos">Infos Pratiques</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Sous-Catégorie(s) :</legend>
                        <span class="error"><?= isset($error['sousCategorie']) ? $error['sousCategorie'] : "" ?></span>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="alimentation">
                            <label for="alimentation">Alimentation</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="sante">
                            <label for="sante">Santé</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="reproduction">
                            <label for="reproduction">Reproduction</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="education">
                            <label for="education">Éducation</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="infos">
                            <label for="infos">Infos Pratiques</label>
                        </div>
                    </fieldset>
                </div>

            </div>
            <div class="blocArticle">
                <label for="article">Contenu de l'article :</label>
                <textarea name="article" id="article" cols="70" rows="20"><?= $article ?></textarea>
                <span class="error"><?= isset($error['article']) ? $error['article'] : "" ?></span>
            </div>
            <div class="photoArticle">
                <div>
                    <label for="photoArticleUpload">Photo :</label>
                    <input type="file" name="photoArticleUpload" id="photoArticleUpload" value="<?= $photoArticleUpload ?>">
                    <span class="error"><?= isset($error['photoArticleUpload']) ? $error['photoArticleUpload'] : "" ?></span>
                </div>
            </div>

            <div class="annulAjout">
                <a href="../"><button class="btnGris" type="button">Annuler</button></a>
                <input class="btnRougeClair" type="submit" name="ajout" value="Ajouter">
            </div>

        </form>
    </main>
    <?php include_once '../../structure/footerView.php' ?>