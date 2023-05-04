<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un profil collaborateur - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js" type="module" defer></script>

</head>

<body>
    <?php require_once '../../structure/headerNiv2View.php' ?>

    </ul>
    </nav>
    </header>

    <main class="container">
        <h2>Modification d'un profil collaborateur</h2>
        <form method="POST" action="" enctype="multipart/form-data" class="formEquipe" novalidate>
            <div class="associe"><label for="associe">Associé Épi-Véto :</label>
                Oui <input type="radio" name="associe" id="associe" value="oui">
                Non <input type="radio" name="associe" id="associe" value="non">
            </div>
            <div class="civilite">
                <div class="titre">
                    <label for="type">Titre :</label>
                    Dr <input type="radio" name="titre" id="titre" value="Dr">
                    Mme <input type="radio" name="titre" id="titre" value="Mme">
                    Mr <input type="radio" name="titre" id="titre" value="Mr">
                    <span class="error"><?= isset($error['titre']) ? $error['titre'] : "" ?></span>
                </div>

                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>">
                    <span class="error"><?= isset($error['prenom']) ? $error['prenom'] : "" ?></span>

                </div>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" value="<?= $nom ?>">
                    <span class="error"><?= isset($error['nom']) ? $error['nom'] : "" ?></span>
                </div>
            </div>
            <div class="fonctionDiplome">
                <div>
                    <label for="fonction">Fonction :</label>
                    Vétérinaire <input type="radio" name="fonction" id="fonction" value="Vétérinaire">
                    ASV <input type="radio" name="fonction" id="fonction" value="ASV">
                    <span class="error"><?= isset($error['fonction']) ? $error['fonction'] : "" ?></span>
                </div>
                <div>
                    <label for="diplome">Diplôme :</label>
                    <input type="text" name="diplome" id="diplome" value="<?= $diplome ?>">
                    <span class="error"><?= isset($error['diplome']) ? $error['diplome'] : "" ?></span>
                </div>
            </div>
            <div class="description">
                <div>
                    <label for="description_pro">Description Pro :</label>
                    <textarea name="description_pro" id="description_pro" cols="100" rows="20"><?= $description_pro ?></textarea>
                    <span class="error"><?= isset($error['description_pro']) ? $error['description_pro'] : "" ?></span>
                </div>
                <div>
                    <label for="description_perso">Description Perso :</label>
                    <textarea name="description_perso" id="description_perso" cols="100" rows="20"><?= $description_perso ?></textarea>
                    <span class="error"><?= isset($error['description_perso']) ? $error['description_perso'] : "" ?></span>
                </div>
            </div>


            <div class="questions">
                <div>
                    <label for="question_1">Question 1 : Qu'est-ce qui te plais le plus à Épi-Véto :</label>
                    <input type="text" name="question_1" id="question_1" value="<?= $question_1 ?>">
                    <span class="error"><?= isset($error['question_1']) ? $error['question_1'] : "" ?></span>
                </div>
                <div>
                    <label for="question_2">Question 2 : Quel est ton mot médical préféré :</label>
                    <input type="text" name="question_2" id="question_2" value="<?= $question_2 ?>">
                    <span class="error"><?= isset($error['question_2']) ? $error['question_2'] : "" ?></span>
                </div>
                <div>
                    <label for="question_3">Question 3 : Quel est l'animal (espèce) que tu préfères :</label>
                    <input type="text" name="question_3" id="question_3" value="<?= $question_3 ?>">
                    <span class="error"><?= isset($error['question_3']) ? $error['question_3'] : "" ?></span>
                </div>
                <div>
                    <label for="question_4">Question 4 : Quelle phrase idiote / expression t'agaces :</label>
                    <input type="text" name="question_4" id="question_4" value="<?= $question_4 ?>">
                    <span class="error"><?= isset($error['question_4']) ? $error['question_4'] : "" ?></span>
                </div>
                <div>
                    <label for="question_5">Question 5 : Quelle est ta devise personnelle :</label>
                    <input type="text" name="question_5" id="question_5" value="<?= $question_5 ?>">
                    <span class="error"><?= isset($error['question_5']) ? $error['question_5'] : "" ?></span>
                </div>

            </div>
            <div class="photos">
                <div>
                    <label for="photo_unUpload">Photo Principale :</label>
                    <input type="file" name="photo_unUpload" id="photo_unUpload">
                    <span class="error"><?= isset($error['photo_unUpload']) ? $error['photo_unUpload'] : "" ?></span>
                </div>
                <div>
                    <label for="photo_deuxUpload">Photo en haut à droite :</label>
                    <input type="file" name="photo_deuxUpload" id="photo_deuxUpload">
                    <span class="error"><?= isset($error['photo_deuxUpload']) ? $error['photo_deuxUpload'] : "" ?></span>
                </div>
                <div>
                    <label for="photo_troisUpload">Photo en bas à gauche :</label>
                    <input type="file" name="photo_troisUpload" id="photo_troisUpload">
                    <span class="error"><?= isset($error['photo_troisUpload']) ? $error['photo_troisUpload'] : "" ?></span>
                </div>
                <div>
                    <label for="photo_quatreUpload">Photo en bas à gauche :</label>
                    <input type="file" name="photo_quatreUpload" id="photo_quatreUpload">
                    <span class="error"><?= isset($error['photo_quatreUpload']) ? $error['photo_quatreUpload'] : "" ?></span>
                </div>

            </div>
            <div class="reseaux">
                <div>
                    <label for="insta">Instagram :</label>
                    <input type="url" name="insta" id="insta" value="<?= $insta ?>">
                    <span class="error"><?= isset($error['insta']) ? $error['insta'] : "" ?></span>
                </div>
                <div>
                    <label for="facebook">Facebook :</label>
                    <input type="url" name="facebook" id="facebook" value="<?= $facebook ?>">
                    <span class="error"><?= isset($error['facebook']) ? $error['facebook'] : "" ?></span>
                </div>
            </div>
            <div class="annulAjout">
                <a href="../"><button class="btnGris" type="button">Annuler</button></a>
                <input class="btnRougeClair" type="submit" name="ajout" value="Modifier">
            </div>

        </form>
    </main>
    <footer>
        <p>2023 - Épi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
        <div class="legal">
            <p><a href="#">Mentions légales</a> - <a href="">Politique de confidentialité</a></p>
        </div>
        <p>
            <?php if (isConnected()) : ?>
                <?php if (isAdminConnected()) : ?>
                    <a href="./adminEpiVeto/index.php" role="button">Page Administrateur</a>
                <?php endif ?>
                <a href="./login/deconnexion.php">Se déconnecter</a>
            <?php else : ?>
                <a class="logAdmin" href="./login/">Administration du site</a>
            <?php endif ?>
        </p>
    </footer>
</body>

</html>