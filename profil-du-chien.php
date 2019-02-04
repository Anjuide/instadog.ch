<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// DEMARRER UNE NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// RECUPERER L'ID PASSÉ EN PARAMETRE
$id = $_GET['id'];
// APPEL DES FONCTIONS DE MON OBJET CONNEXION
$dogProfile = $appli->getDogProfile($id);
$dogId = $dogProfile->getId();
$listeArticles = $appli->getDogArticles($dogId);
// Titre de la page
$title = 'Profil de ' . $dogProfile->getNickname() . '';
// INCLURE LE HEADER
include "header.php";
?>
<style>
.container2 {
  position: relative;
  text-align: left;
  color: white;
}

.bottom-left2 {
  position: absolute;
  bottom: 8px;
  left: 5%;
}

.myleft{
    padding-left:0px;
}

</style>

<div class="container2">
    <img src="images/dog/<?php echo $dogProfile->getPicture(); ?>" alt="" class="src" style="width:100%;">
    <div class="bottom-left2">
        <div>
            <h2><a href="#"><?php echo $dogProfile->getNickname(); ?></a></h2>
            <ul class="myleft" >
                <li><?php echo $dogProfile->getBirthday(); ?></li>
                <li><a href="#"><?php echo $dogProfile->getListRaces(); ?></a></li>	
                <li><a href="#">Genève, CH</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-liste-articles">
		<div class="post show post-photopost" style="background-image: url(http://usercontent.packdog.com/post/photo/bg/6qUGGa_914ddfd5128bf6343382f0c6d7419a69ffeeb1c0.jpg); background-color: #8F9DB1; background-position: 50% 0%;" id="post-944ydm" data-id="515448" data-type="post" data-created="1520035310">
			<div class="post-bgscreen">
				<div class="post-container">
						<a href="ajouter-un-article.php" class="btn btn-primary">
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ajouter Un Article</button>
						</a>
				</div><!-- post-container -->
			</div><!-- post-bgscreen -->
        </div><!-- post -->
		<?php 
		foreach ($listeArticles as $article){
		echo'<div class="post show post-photopost" style="background-image: url(images/dog/' . $article->getPicture() . '); background-color: #98A5B0; background-position: 50% 0%;" id="post-ng2VjB" data-id="516849" data-type="post" data-created="1521933880">';
			
			echo'<div class="post-bgscreen">';
				echo'<div class="post-container">';
					echo'<div class="post-header">';
						echo'<h2>' . $article->getTitle() . ' <a href="#" class="post-humanname">Ange Gnamba</a></h2>';
						
						echo'<div class="post-stamp">';	
							echo'<div class="post-time"><a href="#">' . $article->getPublicationDate() . '</a></div>';
						echo'</div>';
					echo'</div>'; // post header
					echo'<div class="post-content">';
						echo'<a class="post-wrapper" href="article-du-chien.php?id=' . $article->getId() . '"><img src="images/dog/' . $article->getPicture() . '" alt="Photo article de ' . $dogProfile->getNickname() . '"></a>';
					echo'</div>';

					echo'<div class="post-actions">	';			
						echo'<div class="post-caption">';
							echo'<p>' . $article->getDescription() . '</p>';
						echo'</div>';
					echo'</div>';
				echo'</div>';// post-container -->
			echo'</div>';// post-bgscreen -->
			
        echo'</div>'; // post -->
	}?>
	
</div>

<?php 
include "footer.php"
?>