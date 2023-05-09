<?php

// fonctions générales

function dbug($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}

function redirectUrl(string $path = ''): void
{
    $homeUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/EpiVeto';
    $homeUrl .= '/' . $path;
    header("Location: {$homeUrl}");
    exit();
}

function getUrl(string $path)
{
    $homeUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/EpiVeto';
    $homeUrl .= '/' . $path;
    // dd($homeUrl);
    echo $homeUrl;
}

function error404(): void
{
    http_response_code(404);
    include('../view/404.php');
    die();
}

// fonctions session start

function isConnected(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) :
        return true;
    else :
        return false;
    endif;
}

function isAdminConnected(): bool
{
    if (isset($_SESSION['login']) && $_SESSION['login'] === 'admin') :
        return true;
    else :
        return false;
    endif;
}


// fonctions CRUD générales

/**
 * checkXSSPostValue
 * 
 * Cette fonction sert à vérifier l'intégrité de la variable post transmise (faille XSS).
 * 
 * @param  mixed $postEntrie : entrée de formulaire à vérifier
 * @return mixed variable post nettoyée de ses tags
 */
function checkXSSPostValue($postEntrie)
{
    $postEntrie = strip_tags($postEntrie);
    return $postEntrie;
}

/**
 * checkEmptyValue
 *
 * Cette fonction permet de vérifier si un champs obligatoire est vide. 
 * 
 * @param  mixed $postEntrie : entrée de formulaire à vérifier
 * @param  string $key : name HTML(index post de mon entrée)
 * @param  array $error : tableau d'erreurs de mon formulaire
 * @return array $error : retourne le tableau d'erreurs modifié si le champs est vide
 * @version 1.0.0
 * @author Cemoi
 */
function checkEmptyValue($postEntrie, $key, $error)
{
    if (empty($postEntrie)) :
        $error[$key] = "Le champ $key est vide.";

    endif;
    return $error;
}

function checkTelephone($telephone, $key, $error)
{

    // Supprime tous les caractères non numériques
    $telephone = preg_replace('/\D/', '', $telephone);

    // Vérifie si le numéro de téléphone a exactement 10 chiffres
    if (strlen($telephone) !== 10) :
        // Affiche un message d'erreur
        $error[$key] = "Le numéro de téléphone doit avoir 10 chiffres.";
    endif;
    return $error;
}

/**
 * checkEmail
 * 
 * Cette fonction permet de vérifier si le format de l'e-mail est valide.
 *
 * @param  string $emailEntrie : champs e-mail à vérifier
 * @param  string $key :name HTML(index post de mon entrée)
 * @param  array $error : tableau d'erreurs de mon formulaire
 * @return array $error : retourne le tableau d'erreurs modifié si le champs est vide
 */
function checkEmail($postEntrie, $key, $error)
{
    if (!filter_var($postEntrie, FILTER_VALIDATE_EMAIL)) :
        $error[$key] = 'L\'e-mail est invalide".';

    endif;
    return $error;
}

/**
 * checkPwdValid
 * 
 * Cette fonction permet de savoir si le mot de passe correspond aux critères de sécurité.
 *
 * @param  string $postEntrie : champs e-mail à vérifier
 * @param  string $key :name HTML(index post de mon entrée)
 * @param  array $error : tableau d'erreurs de mon formulaire
 * @return array $error : retourne le tableau d'erreurs modifié si le champs est vide
 */
function checkPwdValid($postEntrie, $key, $error)
{
    $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

    if (!preg_match($password_regex, $postEntrie)) :
        $error[$key] = 'Le mot de passe doit comporter au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.';

    endif;
    return $error;
}

/**
 * checkPwdConfirm
 *
 * Cette fonction permet de vérifier si les mots de passe sont identiques 
 * 
 * @param  mixed $postPwd : entrée de formulaire à vérifier
 *  @param  mixed $postConfPwd : entrée de formulaire à vérifier

 * @param  string $key : name HTML(index post de mon entrée)
 * @param  array $error : tableau d'erreurs de mon formulaire
 * @return array $error : retourne le tableau d'erreurs modifié si les mots de passe ne sont pas identiques
 * @version 1.0.0
 * @author Cemoi
 */
function checkPwdConfirm($postPwd, $postConfPwd, $key, $error)
{
    if ($postPwd !== $postConfPwd) :
        $error[$key] = "Les deux mots de passe ne sont pas identiques.";

    endif;
    return $error;
}


/*  fonctions UTILISATEURS  */

function findEmail(string $email): array|bool
{
    require 'pdo.php';

    $requete = 'SELECT * FROM utilisateurs where email = :email';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':email', $email, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->fetch();
}

function insertUtilisateur(string $civilite, string $prenom, string $nom,  string $telephone, string $email, string $pwd): int
{
    require 'pdo.php';
    $pwdHashe = password_hash($pwd, PASSWORD_DEFAULT);

    $requete = 'INSERT INTO utilisateurs (`civilite`,`prenom`, `nom`, `telephone`,  `email`, `pwd`,  `created_at`, `modified_at`) VALUES (:civilite, :prenom, :nom, :telephone, :email, :pwd, now(), now())';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':email', $email, PDO::PARAM_STR);
    $resultat->bindValue(':pwd', $pwdHashe, PDO::PARAM_STR);
    $resultat->bindValue(':civilite', $civilite, PDO::PARAM_STR);
    $resultat->bindValue(':telephone', $telephone, PDO::PARAM_STR);
    $resultat->execute();
    return $conn->lastInsertId();
}

function isGetIdValid(): bool
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) :
        return true;
    else :
        return false;
    endif;
}

function getUtilisateurs(): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_utilisateur, prenom, nom, telephone, email, role, created_at, modified_at  FROM `utilisateurs` WHERE 1 ORDER BY nom ASC ";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    return $resultat->fetchAll();
}


function getUtilisateurById(int $idUtilisateur): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT * FROM utilisateurs WHERE id_utilisateur = :idUtilisateur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}



function updateUtilisateur(int $id_utilisateur, string $civilite, string $prenom, string $nom, int $telephone, string $email,  string $role): bool
{
    require 'pdo.php';
    $requete = 'UPDATE utilisateurs SET civilite = :civilite, prenom = :prenom, nom = :nom, telephone = :telephone, email = :email, role = :role, modified_at = now() WHERE id_utilisateur = :id_utilisateur';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
    $resultat->bindValue(':civilite', $civilite, PDO::PARAM_STR);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':telephone', $telephone, PDO::PARAM_INT);
    $resultat->bindValue(':email', $email, PDO::PARAM_STR);
    $resultat->bindValue(':role', $role, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->execute();
}

function updatePwd(int $id_utilisateur, string $pwd): bool
{
    require 'pdo.php';

    $pwdHashe = password_hash($pwd, PASSWORD_DEFAULT);

    $requete = 'UPDATE utilisateurs SET pwd = :pwd, modified_at = now() WHERE id_utilisateur = :id_utilisateur';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
    $resultat->bindValue(':pwd', $pwdHashe, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->execute();
}



function suppUtilisateurById(int $idUtilisateur): bool
{
    require 'pdo.php';
    $sqlRequest = "DELETE FROM utilisateurs WHERE id_utilisateur = :idUtilisateur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
    return $resultat->execute();
}

// fonctions images

function uploadPhoto($photo, $photoPath)
{

    $target_dir = "../../uploads/" . $photoPath;
    $target_file = $target_dir . basename($photo["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // dd($target_file);
    // Check if image file is a actual image or fake image
    if (isset($_POST["ajout"])) {
        $check = getimagesize($photo["tmp_name"]);

        if ($check !== false) {
            echo "Le fichier est une image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Le fichier téléchargé n'est pas une image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Désolé, le fichier existe déjà.";
        $uploadOk = 0;
    }

    // Check file size
    if ($photo["size"] > 500000) {
        echo "Désolé, votre image est trop grande.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Désolé, seuls les fichiers de type JPG, JPEG, PNG & GIF sont autorisés.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Désolé, le fichier n'a pas été téléchargé.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($photo["tmp_name"], $target_file)) {
            echo "Le fichier " . htmlspecialchars(basename($photo["name"])) . " a bien été téléchargé.";
        } else {
            echo "Désolé, une erreur est survenue lors du téléchargement.";
        }
    }
}

function insertPhoto($photo, $photoPath)
{
    $photo_Name = '';
    if (!empty($photo["name"])) :

        uploadPhoto($photo, $photoPath);
        $photo_Name = $photo["name"];

    endif;
    if ($photo_Name) :
        $photo = "./uploads/" . $photoPath . basename($photo["name"]);
    //  dd($photo);

    else :
        $photo = "";
    endif;
    return $photo;
}

function updatePhoto($photo_Name, $photo_Db, $photoPath)
{
    if (!empty($photo_Name["name"]) && $photo_Name["name"] !== $photo_Db) :

        unlink('../.' . $photo_Db);
        uploadPhoto($photo_Name, $photoPath);
        $photo = "./uploads/" . $photoPath . basename($photo_Name["name"]);

    else :
        $photo = $photo_Db;
    endif;
    return $photo;
}
// // fonctions Carousel



// // fonctions équipe

function getEmployes(): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_employe, associe, titre, nom, prenom, fonction, diplome, created_at, modified_at  FROM `employes` WHERE 1 ORDER BY associe DESC, fonction ASC, nom ASC";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    return $resultat->fetchAll();
}

function getEmployesByFonction(string $fonction): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_employe, photo_un, associe, titre, nom, prenom, diplome, description_pro, insta, facebook  FROM `employes` WHERE fonction = :fonction ORDER BY associe DESC, nom ASC";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':fonction', $fonction, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->fetchAll();
}

function getEmployeById(int $idEmploye): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT *  FROM `employes` WHERE id_employe = :id_employe";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':id_employe', $idEmploye, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}


function insertEmploye(string $associe, string $prenom, string $nom, string $titre, string $fonction, string $diplome, string $description_pro, string $description_perso, string $question_1, string $question_2, string $question_3, string $question_4, string $question_5, string $photo_un, string $photo_deux, string $photo_trois, string $photo_quatre, string $insta, string $facebook): int //string $description, string $photo, string $insta, string $facebook //, `description`, `photo`, `insta`, `facebook` //:description, :photo, :insta, :facebook,
{
    require 'pdo.php';

    $requete = 'INSERT INTO employes (`associe`,`prenom`, `nom`, `titre`,`fonction`,  `diplome`, `description_pro`, `description_perso`,`question_1`,`question_2`,`question_3`,`question_4`,`question_5`,`photo_un`,`photo_deux`,`photo_trois`,`photo_quatre`, `insta`, `facebook`, `created_at`, `modified_at`) VALUES (:associe, :prenom, :nom, :titre, :fonction, :diplome, :description_pro, :description_perso, :question_1, :question_2, :question_3, :question_4, :question_5, :photo_un, :photo_deux, :photo_trois, :photo_quatre, :insta, :facebook, now(), now())';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':associe', $associe, PDO::PARAM_STR);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':titre', $titre, PDO::PARAM_STR);
    $resultat->bindValue(':fonction', $fonction, PDO::PARAM_STR);
    $resultat->bindValue(':diplome', $diplome, PDO::PARAM_STR);
    $resultat->bindValue(':description_pro', $description_pro, PDO::PARAM_STR);
    $resultat->bindValue(':description_perso', $description_perso, PDO::PARAM_STR);
    $resultat->bindValue(':question_1', $question_1, PDO::PARAM_STR);
    $resultat->bindValue(':question_2', $question_2, PDO::PARAM_STR);
    $resultat->bindValue(':question_3', $question_3, PDO::PARAM_STR);
    $resultat->bindValue(':question_4', $question_4, PDO::PARAM_STR);
    $resultat->bindValue(':question_5', $question_5, PDO::PARAM_STR);
    $resultat->bindValue(':photo_un', $photo_un, PDO::PARAM_STR);
    $resultat->bindValue(':photo_deux', $photo_deux, PDO::PARAM_STR);
    $resultat->bindValue(':photo_trois', $photo_trois, PDO::PARAM_STR);
    $resultat->bindValue(':photo_quatre', $photo_quatre, PDO::PARAM_STR);
    $resultat->bindValue(':insta', $insta, PDO::PARAM_STR);
    $resultat->bindValue(':facebook', $facebook, PDO::PARAM_STR);
    $resultat->execute();
    return $conn->lastInsertId();
}

function updateEmploye(int $id_employe, string $associe, string $prenom, string $nom, string $titre, string $fonction, string $diplome, string $description_pro, string $description_perso, string $question_1, string $question_2, string $question_3, string $question_4, string $question_5, string $photo_un, string $photo_deux, string $photo_trois, string $photo_quatre, string $insta, string $facebook): bool
{
    require 'pdo.php';
    $requete = 'UPDATE employes SET associe = :associe, prenom = :prenom, nom = :nom, titre = :titre, fonction = :fonction, diplome = :diplome, description_pro  = :description_pro, description_perso  = :description_perso, question_1 = :question_1, question_2 = :question_2, question_3 = :question_3, question_4 = :question_4, question_5 = :question_5, photo_un = :photo_un, photo_deux = :photo_deux, photo_trois = :photo_trois, photo_quatre = :photo_quatre, insta = :insta, facebook = :facebook, modified_at = now() WHERE id_employe = :id_employe';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_employe', $id_employe, PDO::PARAM_INT);
    $resultat->bindValue(':associe', $associe, PDO::PARAM_STR);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':titre', $titre, PDO::PARAM_STR);
    $resultat->bindValue(':fonction', $fonction, PDO::PARAM_STR);
    $resultat->bindValue(':diplome', $diplome, PDO::PARAM_STR);
    $resultat->bindValue(':description_pro', $description_pro, PDO::PARAM_STR);
    $resultat->bindValue(':description_perso', $description_perso, PDO::PARAM_STR);
    $resultat->bindValue(':question_1', $question_1, PDO::PARAM_STR);
    $resultat->bindValue(':question_2', $question_2, PDO::PARAM_STR);
    $resultat->bindValue(':question_3', $question_3, PDO::PARAM_STR);
    $resultat->bindValue(':question_4', $question_4, PDO::PARAM_STR);
    $resultat->bindValue(':question_5', $question_5, PDO::PARAM_STR);
    $resultat->bindValue(':photo_un', $photo_un, PDO::PARAM_STR);
    $resultat->bindValue(':photo_deux', $photo_deux, PDO::PARAM_STR);
    $resultat->bindValue(':photo_trois', $photo_trois, PDO::PARAM_STR);
    $resultat->bindValue(':photo_quatre', $photo_quatre, PDO::PARAM_STR);
    $resultat->bindValue(':insta', $insta, PDO::PARAM_STR);
    $resultat->bindValue(':facebook', $facebook, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->execute();
}

function suppEmployeById(int $idEmploye): bool
{
    require 'pdo.php';
    $sqlRequest = "DELETE FROM employes WHERE id_employe = :idEmploye";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idEmploye', $idEmploye, PDO::PARAM_INT);
    return $resultat->execute();
}

/* fonctions sur BDD Actualites */

function getActualiteById(int $idActualite): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT *  FROM `actualites` WHERE id_actualite = :id_actualite";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':id_actualite', $idActualite, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}
function updateActualite(int $idActualite, string $bandeau, string $carouselUn, string $carouselDeux): bool
{
    require 'pdo.php';
    $requete = 'UPDATE actualites SET bandeau = :bandeau, carousel_un = :carouselUn, carousel_deux = :carouselDeux WHERE id_actualite = :id_actualite';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_actualite', $idActualite, PDO::PARAM_INT);
    $resultat->bindValue(':bandeau', $bandeau, PDO::PARAM_STR);
    $resultat->bindValue(':carouselUn', $carouselUn, PDO::PARAM_STR);
    $resultat->bindValue(':carouselDeux', $carouselDeux, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->execute();
}

/* fonctions sur BDD Honoraires */

function getHonoraires(): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_acte, acte, prix, modified_at  FROM `honoraires` WHERE 1 ORDER BY id_acte ASC";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    return $resultat->fetchAll();
}

function getHonoraireMaxModified(): string
{
    require 'pdo.php';
    ini_set('intl.default_locale', 'fr_FR');
    $sqlRequest = "SELECT MAX(modified_at) AS date FROM `honoraires` WHERE 1 ";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    $date = $resultat->fetch()['date'];
    $cal = IntlCalendar::fromDateTime($date, "Europe/Paris");
    //dd($cal);
    $dateFR = IntlDateFormatter::formatObject($cal, "MMMM YYYY", 'fr_FR');
    return $dateFR;
}


function getHonoraireById(int $idActe): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT *  FROM `honoraires` WHERE id_acte = :id_acte";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':id_acte', $idActe, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}


function insertHonoraire(string $acte, float $prix): int
{
    require 'pdo.php';

    $requete = 'INSERT INTO honoraires (`acte`,`prix`, `modified_at`) VALUES (:acte, :prix, now())';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':acte', $acte, PDO::PARAM_STR);
    $resultat->bindValue(':prix', $prix, PDO::PARAM_INT);
    $resultat->execute();
    return $conn->lastInsertId();
}

function updateHonoraire(int $idActe, string $acte, float $prix): bool
{
    require 'pdo.php';
    $requete = 'UPDATE honoraires SET acte = :acte, prix = :prix WHERE id_acte = :id_acte';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_acte', $idActe, PDO::PARAM_INT);
    $resultat->bindValue(':acte', $acte, PDO::PARAM_STR);
    $resultat->bindValue(':prix', $prix, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->execute();
}
function suppHonoraireById(int $idActe): bool
{
    require 'pdo.php';
    $sqlRequest = "DELETE FROM honoraires WHERE id_acte = :idActe";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idActe', $idActe, PDO::PARAM_INT);
    return $resultat->execute();
}

/* fonctions sur BDD CONSEILS */

function getConseils(): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_conseil, titre, article, image, categorie, sous_categorie, created_at, modified_at  FROM `conseils` WHERE 1 ORDER BY titre ASC";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    return $resultat->fetchAll();
}
function insertConseil(string $titre, string $article, string $categorie, string $sousCategorie, string $image ): int
{
    require 'pdo.php';

    $requete = 'INSERT INTO conseils (`titre`,`article`,`categorie`, `sous_categorie`, `image`, `created_at`, `modified_at`) VALUES (:titre, :article, :categorie, :sous_categorie, :image, now(), now())';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':titre', $titre, PDO::PARAM_STR);
    $resultat->bindValue(':article', $article, PDO::PARAM_STR);
    $resultat->bindValue(':categorie', $categorie, PDO::PARAM_STR);
    $resultat->bindValue(':sous_categorie', $sousCategorie, PDO::PARAM_STR);
    $resultat->bindValue(':image', $image, PDO::PARAM_STR);

    $resultat->execute();
    return $conn->lastInsertId();
}

function suppConseilById(int $idConseil): bool
{
    require 'pdo.php';
    $sqlRequest = "DELETE FROM conseils WHERE id_conseil = :idConseil";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idConseil', $idConseil, PDO::PARAM_INT);
    return $resultat->execute();
}
