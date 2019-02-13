<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPLOAD PHOTOS INSTADOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        // FONCTION D'AFFICHAGE EN PLUSIEURS LIGNES
        function affichageTabFile($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
       
        // Vérifier si l'utilisateur a entré quelque chose
        if (isset($_FILES["userdog"])){
            // AFFICHER LE TABLEAU DE $_FILES
            affichageTabFile($_FILES);
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
            // AFFICHER L'EXTENSION DU FICHIER
            affichageTabFile($file_extension);
            $uploadedFileName = $_FILES['userdog']['name']; 
            $uploadedFile = new SplFileInfo($uploadedFileName);
            $extension_Fichier = $uploadedFile->getExtension();
            // AFFICHER L'EXTENSION DU FICHIER
            affichageTabFile($extension_Fichier);
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
                $today = date('Ymd His');
                $fileName = $today . $_FILES['userdog']['name'];
                // DEPLACER LE FICHIER TELECHARGÉ DANS LE SERVEUR
                move_uploaded_file($_FILES['userdog']['tmp_name'], 'upload/'.$fileName);
                echo "Bravo! L'image a été téléchargé!";
            }
                   
        }else  {
            echo "Erreur du fichier";
            affichageTabFile($_FILES);
        }
        
    ?>
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="file" name="userdog" id="">
        <input type="submit" value="Valider">
    </form>
</body>
</html>