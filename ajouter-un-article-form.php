<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER LES POSTS
$title = $_POST['title'];
$picture = $_POST['picture'];
$description = $_POST['description'];
$publicationDate = "2019-01-08 05:21:24";
$dogId = 2;

// APPEL DE MA FONCTION QUI AJOUTE UN ARTICLE
$appli->setArticle ($title, $picture, $description, $publicationDate, $dogId);
header("Location: index.php");

?>