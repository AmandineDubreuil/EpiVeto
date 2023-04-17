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

function findEmail(string $email): array|bool
{
    require 'pdo.php';

    $requete = 'SELECT * FROM utilisateurs where email = :email';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':email', $email, PDO::PARAM_STR);
    $resultat->execute();
    return $resultat->fetch();
}

function checkPwdConfirm($postPwd, $postConfPwd, $key, $error)
{
    if ($postPwd !== $postConfPwd) :
        $error[$key] = "Les deux mots de passe ne sont pas identiques.";

    endif;
    return $error;
}


function insertUtilisateur( string $civilite, string $prenom, string $nom,  int $telephone, string $email, string $pwd): int
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