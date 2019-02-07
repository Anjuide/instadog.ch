<?php
require('Connexion.php');
/* ------------------------------------------------------------------------------------------------------*/
/* ------------------------------------------- NEW OBJET ----------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
$appli = new Connexion();
/* ------------------------------------------------------------------------------------------------------*/
/* ------------------------------------- TESTER LA CONNEXION ------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
if (is_null($appli)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}
echo "</br>";
/* ------------------------------------------------------------------------------------------------------*/
/* -------------------------------------------- COMMENT ------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------*/
// $comment = "TESTER LA FONCTION D'INSERTION D'UN COMMENTAIRE";
// $publicationDate = "2019-01-08 05:21:24"; // GETDATE()
// $articleId = 1;
// $userId = 1;

// $insertComment = $appli->setComment ($comment, $publicationDate, $articleId, $userId);
// var_dump($insertComment);
/* ------------------------------------------------------------------------------------------------------*/
/* -------------------------------------------- ARTICLE ------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------*/
// $title = "TEST FONCTION";
// $picture = "article.jpg";
// $description = "TESTER LA FONCTION D'INSERTION D'UN ARTICLE";
// $publicationDate = "2019-01-08 05:21:24"; // GETDATE();
// $dogId = 2;

// $insertArticle = $appli->setArticle ($title, $picture, $description, $publicationDate, $dogId);
// var_dump($insertArticle);

/* ------------------------------------------------------------------------------------------------------*/
/* -------------------------------------------- DOG ---------------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
// $nickname = "TEST FONCTION";
// $birthday = "2019-01-08"; // GETDATE();
// $picture = "dog.jpg";
// $userId = 2;

// $insertDog = $appli->setDog ($nickname, $birthday, $picture, $userId);
// var_dump($insertDog);

/* ------------------------------------------------------------------------------------------------------*/
/* ----------------------------------------- USERDOG --------------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
 $email = "test@fonction.ch";
 $pwd = "test1234"; // HASH PASSWORD
// $lastConnectionDate = "2019-01-08"; // GETDATE();
// $lastName = "Test";
// $firstName = "Fonction";
// $country = "User";
// $city = "Dog";

 $insertUserDog = $appli->setUserDog ($email, $pwd, $lastConnectionDate, $lastName, $firstName, $country, $city);
 var_dump($insertUserDog);
// $_POSTpassword= "ange1504";
// $passwordBD = password_hash($_POSTpassword,PASSWORD_DEFAULT);
// echo $passwordBD;
// echo"<br>";
// $password = "ange1504";
// if (password_verify ( $password ,  $passwordBD )){
//     echo "Bon mot de passe";
// }else{
//     echo "Mauvais mot de passe";
// }

$checkEmail = $appli->getUsersByEmail("ange.gnamba@gmail.com");
if($appli->getUsersByEmail("angegnamba@gmail.com") == false){
    echo "L'utilisateur n'est pas dans la base de données";
}else{
    echo"Bon utilisateur";
}

?>