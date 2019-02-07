<?php
    // TRANSFERER UNE PHOTO
    public function uploadPicture (){
        // Vérifier si l'utilisateur a entré quelque chose
        if (isset($_FILES["userdog"])){
            // INITIALISER L'EXTENSION D'ERREUR À FALSE
            $extensions_erreur = false;
            // Liste des extensions que j'autorise à être dans ma base de données
            $extensions = array ('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG', 'gif', 'GIF');
            $phpFileUploadErrors = array(
                0 => 'There is no error, the file uploaded with success',
                1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
                2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
                3 => 'The uploaded file was only partially uploaded',
                4 => 'No file was uploaded',
                6 => 'Missing a temporary folder',
                7 => 'Failed to write file to disk.',
                8 => 'A PHP extension stopped the file upload.',
            );
            $file_extension = explode('.', $_FILES['userdog']['name']); 
            $file_extension = end($file_extension);

            $uploadedFileName = $_FILES['userdog']['name']; 
            $uploadedFile = new SplFileInfo($uploadedFileName);
            $extension_Fichier = $uploadedFile->getExtension();

            // SI LE NOM D'EXTENSION N'EST PAS LE MÊME
            if(!in_array($file_extension, $extensions)){
                $extensions_erreur = true;
            }
            // SI L'ERREUR N'EST PAS EGAL À 0
            if($_FILES['userdog']['error']){
                echo $phpFileUploadErrors[$_FILES['userdog']['error']];
            } elseif ($extensions_erreur) {
                echo 'Extension invalide <br> Veuillez choisir une extension de type "jpg", "jpeg", "gif" ou "png" ';
            } else {
                // DEPLACER LE FICHIER TELECHARGÉ DANS LE SERVEUR
                move_uploaded_file($_FILES['userdog']['tmp_name'], 'upload/'.$_FILES['userdog']['name']);
                echo "Bravo! L'image a été téléchargé!";
            }
                   
        }else  {
            echo "Erreur du fichier";
        }
    }
?>