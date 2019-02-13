<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
include("classes/functions.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER LES POSTS
$title = $_POST['title'];
$description = $_POST['description'];
$publicationDate = date('Y-m-d H:i:s');
$dogId = 2;

$picture = upload($_FILES['picture']);

// APPEL DE MA FONCTION QUI AJOUTE UN ARTICLE
$appli->setArticle ($title, $picture, $description, $publicationDate, $dogId);
header("Location: index.php");

?>