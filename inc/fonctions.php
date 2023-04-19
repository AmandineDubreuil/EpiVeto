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


// fonctions utilisateurs

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

function uploadPhoto($photo)
{
    $target_dir = "../../uploads/equipe/";
    $target_file = $target_dir . basename($_FILES["photoUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   // dd($target_file);
    // Check if image file is a actual image or fake image
    if (isset($_POST["ajout"])) {
        $check = getimagesize($_FILES["photoUpload"]["tmp_name"]);
       
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
    if ($_FILES["photoUpload"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["photoUpload"]["tmp_name"], $target_file)) {
            echo "Le fichier " . htmlspecialchars(basename($_FILES["photoUpload"]["name"])) . " a bien été téléchargé.";
        } else {
            echo "Désolé, une erreur est survenue lors du téléchargement.";
        }
    }
}




// // fonctions équipe

function getEmployes(): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_employe, nom, prenom, created_at, modified_at  FROM `employes` WHERE 1 ORDER BY nom ASC";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->execute();
    return $resultat->fetchAll();
}

function getEmployesByFonction(string $fonction): array
{
    require 'pdo.php';
    $sqlRequest = "SELECT id_employe, photo, titre, nom, prenom, diplome, description, insta, facebook  FROM `employes` WHERE fonction = :fonction ORDER BY nom ASC";
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


function insertEmploye(string $prenom, string $nom, string $titre, string $fonction, string $diplome, string $description, string $photo, string $insta, string $facebook ): int //string $description, string $photo, string $insta, string $facebook //, `description`, `photo`, `insta`, `facebook` //:description, :photo, :insta, :facebook,
{
    require 'pdo.php';

    $requete = 'INSERT INTO employes (`prenom`, `nom`, `titre`,`fonction`,  `diplome`, `description`, `photo`, `insta`, `facebook`, `created_at`, `modified_at`) VALUES (:prenom, :nom, :titre, :fonction, :diplome, :description, :photo, :insta, :facebook, now(), now())';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':titre', $titre, PDO::PARAM_STR);
    $resultat->bindValue(':fonction', $fonction, PDO::PARAM_STR);
    $resultat->bindValue(':diplome', $diplome, PDO::PARAM_STR);
    $resultat->bindValue(':description', $description, PDO::PARAM_STR);
     $resultat->bindValue(':photo', $photo, PDO::PARAM_STR);
     $resultat->bindValue(':insta', $insta, PDO::PARAM_STR);
     $resultat->bindValue(':facebook', $facebook, PDO::PARAM_STR);
    $resultat->execute();
    return $conn->lastInsertId();
}

function updateEmploye(int $id_employe, string $titre, string $prenom, string $nom, string $fonction, string $diplome, string $description, string $photo, string $insta, string $facebook ): bool
{
    require 'pdo.php';
    $requete = 'UPDATE employes SET titre = :titre, prenom = :prenom, nom = :nom, fonction = :fonction, diplome = :diplome, description  = :description, photo = :photo, insta = :insta, facebook = :facebook, modified_at = now() WHERE id_employe = :id_employe';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':id_employe', $id_employe, PDO::PARAM_INT);
    $resultat->bindValue(':titre', $titre, PDO::PARAM_STR);
    $resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
    $resultat->bindValue(':fonction', $fonction, PDO::PARAM_STR);
    $resultat->bindValue(':diplome', $diplome, PDO::PARAM_STR);
    $resultat->bindValue(':description', $description, PDO::PARAM_STR);
    $resultat->bindValue(':photo', $photo, PDO::PARAM_STR);
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
