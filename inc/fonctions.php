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

function cleanData($valeur)
{
    if (!empty($valeur) && isset($valeur)) :
        $valeur = strip_tags(trim($valeur));
        return $valeur;
    else :
        return false;
    endif;
}

function cleanPhone($telephone)
{
    // Supprime tous les caractères non numériques
$telephone = preg_replace('/\D/', '', $telephone); 

// Vérifie si le numéro de téléphone a exactement 10 chiffres
if (strlen($telephone) == 10) {
    // Insère le numéro de téléphone dans la base de données
    // ...

    return $telephone;
    
} else {
    // Affiche un message d'erreur
    echo "Le numéro de téléphone doit avoir 10 chiffres.";
}
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

function insertUtilisateur(string $civilite, string $prenom, string $nom,  int $telephone, string $email, string $pwd): int
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
    $resultat->bindValue(':telephone', $telephone, PDO::PARAM_INT);
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


function suppUtilisateurById(int $idUtilisateur): bool
{
    require 'pdo.php';
    $sqlRequest = "DELETE FROM utilisateurs WHERE id_utilisateur = :idUtilisateur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
    return $resultat->execute();
}
