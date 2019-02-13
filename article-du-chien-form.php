<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER LES POSTS
$comment = $_POST['comment'];
// $publicationDate = "2019-01-08 05:21:24";
$articleId = $_POST['idArticle'];
$userId = 2;
$publicationDate = date('Y-m-d H:i:s');
// APPEL DE MA FONCTION QUI AJOUTE UN ARTICLE
$appli->setComment ($comment, $publicationDate, $articleId, $userId);
header("Location: article-du-chien?id=$articleId.php#comments");

?>