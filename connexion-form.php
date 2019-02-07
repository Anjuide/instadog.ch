<?php
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
$userProfile = $appli->getUsersByEmail($_POST['email']);
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['connexion'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        // SI L'UTILISATEUR N'EST PAS INSCRIT OU QUE LE MOT DE PASSE EST FAUX
        if (($appli->getUsersByEmail($_POST['email']) !== false) ) {
           if (password_verify($_POST['password'], $userProfile->getPwd())) {
                header("Location: index.php");
           }
           else {
                echo "L’adresse e-mail et le mot de passe ne correspondent pas aux données enregistrées. Veuillez vérifier vos données et réessayer.";
           }
        } else {
                echo "L’adresse e-mail et le mot de passe ne correspondent pas aux données enregistrées. Veuillez vérifier vos données et réessayer.";
        }

    } else {
        echo "<span>Veuillez remplir tous les champs obligatoires.</span><br/>";
    }
} else {
    header("Location: connexion.php");
}



?>