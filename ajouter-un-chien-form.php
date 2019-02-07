<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER LES POSTS
$nickname = $_POST['nickname'];
$date = $_POST['date'];
$photo = $_POST['photo'];
$race1 = $_POST['race1'];
$race2 = $_POST['race2'];
$userId = 2;

// APPEL DE MA FONCTION QUI AJOUTE UN CHIEN
$appli->setDog($nickname, $date, $photo, $userId);

?>