<?php 
$title = "Profil de l'utilisateur";
include "header.php"
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
            <hr class="my-4">
            <form class="form-signin" action="connexion-form.php" method="post" enctype="multipart/form-data" >
              <div class="form-label-group">
                <label for="inputEmail">Adresse e-mail</label>
                <input type="email" id="inputEmail"  name="email" class="form-control" placeholder="Adresse e-mail" required autofocus> 
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de passe" required>
              </div>
              <hr class="my-4">
              <button class="btn btn-lg btn-success btn-block text-uppercase" name="connexion" type="submit">Connexion</button>
              <div class="text-center">
                  <a class="small" href="#">Mot de passe oublié?</a>
              </div>
              <div class="text-center">
                <span class="small">Vous n'avez pas de compte? </span>
                 <a class="small" href="inscription.php">Inscrivez-vous ici</a>
               </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
include "footer.php"
?>