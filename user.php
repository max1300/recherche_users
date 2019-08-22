<?php 
require_once 'layout\header.php';
require_once 'data\utilisateurs.php';

if(!array_key_exists('email', $_GET)){
    exit('Votre recherche ne peut aboutir');
    die();
}

$key= $_GET["email"];

$value=array_column($utilisateurs, 'email');

$key=array_search($key, $value);


if ($key === false) {
    exit('Cette utilisateur n\'est pas referencé');
}

$utilisateur = $utilisateurs[$key];

require_once 'user_single.php';

?>



<?php require_once 'layout\footer.php'?>