<?php 
require_once 'layout\header.php';
require_once 'data\utilisateurs.php';


if(!array_key_exists('email', $_GET)){
    
    die();
}

$key= $_GET["email"];

$value=array_column($utilisateurs, 'email');

$key=array_search($key, $value);


if ($key === false) {
    exit('Cette utilisateur n\'est pas referencé');
}

$utilisateur = $utilisateurs[$key];


require_once 'template\user_single.php';




require_once 'layout\footer.php'?>