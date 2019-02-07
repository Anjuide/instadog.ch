<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();

// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['inscription'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['password-repeat'])) {
        // SI LES MOTS DE PASSE SONT IDENTIQUES
        if ($_POST['password'] === $_POST['password-repeat']) {
            // SI L'UTILISATEUR N'EST PAS DÉJÀ INSCRIT
            if ($appli->getUsersByEmail($_POST['email']) == false) {
                // HASHER LE PASSWORD
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // On l'ajoute dans la base de données
                $lastConnectionDate = null ; // GETDATE();
                $lastName = null;
                $firstName = null;
                $country = null;
                $city = null;
                $appli->setUserDog($_POST['email'], $passwordHash, $lastConnectionDate, $lastName, $firstName, $country, $city);
                header("Location: profil.php");
            } else {
                echo "<span>Ce compte existe déjà! Veuillez-vous connecter!</span><br/>";
            }
        } else {
            echo "<span>Les mots de passe ne sont pas identiques.</span><br/>";
        }
    } else {
        echo "<span>Veuillez remplir tous les champs obligatoires.</span><br/>";
    }
} else {
    header("Location: inscription.php");
}


?>