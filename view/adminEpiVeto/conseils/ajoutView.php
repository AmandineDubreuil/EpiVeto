<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une fiche conseils - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../assets/js/scriptAdmin.js" defer></script>
    <link rel="stylesheet" href="../../assets/css/style.css">

    <script src="../../assets/js/script.js" type="module" defer></script>
</head>

<body>
    <?php require_once '../../structure/headerView.php' ?>


    <main class="container">
        <h2>Nouvelle Fiche Conseils</h2>
        <form method="POST" action="" enctype="multipart/form-data" class="formConseils formCRUD" novalidate>
            <div class="blocTitre">
                <div class="blocTitreArticle">
                    <label for="titre">Titre de la fiche :</label>
                    <input type="text" name="titre" id="titre" value="<?= $titre ?>">
                    <div><span class="error"><?= isset($error['titre']) ? $error['titre'] : "" ?></span></div>
                </div>
                <div class="categoriesConseils">
                    <fieldset>
                        <legend>Catégorie(s) :</legend>
                        <span class="error"><?= isset($error['categorie']) ? $error['categorie'] : "" ?></span>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="Chiens">
                            <label for="chiens">Chiens</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="Chats">
                            <label for="chats">Chats</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="Nac">
                            <label for="nac">NAC</label>
                        </div>
                        <div>
                            <input type="checkbox" id="categorie" name="categorie[]" value="Divers">
                            <label for="divers">Divers</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Sous-Catégorie(s) :</legend>
                        <span class="error"><?= isset($error['sousCategorie']) ? $error['sousCategorie'] : "" ?></span>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Alimentation">
                            <label for="alimentation">Alimentation</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Santé">
                            <label for="sante">Santé</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Reproduction">
                            <label for="reproduction">Reproduction</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Éducation">
                            <label for="education">Éducation</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Infos">
                            <label for="infos">Infos Pratiques</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sousCategorie" name="sousCategorie[]" value="Lexique">
                            <label for="lexique">Lexique (uniquement pour Infos Pratiques)</label>
                        </div>

                    </fieldset>
                </div>

            </div>
            <div class="blocArticle">
                <label for="article">Contenu de l'article :</label>
                <textarea name="article" id="article_editor" cols="70" rows="20"><?= $article ?></textarea>
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
        <script src="../../ckeditor/ckeditor.js" ></script>

    <script>
        CKEDITOR.replace('article_editor');
    </script>