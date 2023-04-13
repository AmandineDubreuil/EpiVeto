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

// fonctions sur BDD employés