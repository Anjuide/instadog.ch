<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
include("classes/functions.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER LES POSTS
$nickname = $_POST['nickname'];
$birthday = $_POST['birthday'];
$race1 = $_POST['race1'];
$race2 = $_POST['race2'];
$userId = 2;

$picture = upload($_FILES['picture']);

// APPEL DE MA FONCTION QUI AJOUTE UN CHIEN
$appli->setDog($nickname, $birthday, $picture, $userId);
header("Location: index.php");

?>