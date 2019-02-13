<?php 
$title = "Profil de l'utilisateur";
include "header.php"
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Inscrivez-vous</h5>
            <hr class="my-4">
            <form class="form-signin needs-validation" action="inscription-form.php" method="post" enctype="multipart/form-data" novalidate >

              <div class="form-label-group">
                <label for="inputEmail">Adresse e-mail</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Adresse e-mail" required autofocus> 
                <div class="invalid-feedback">
                  Veuillez entrer une adresse e-mail valide!
                </div>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de passe" required>
              </div>

              <div class="form-label-group">
                <label for="inputPasswordConfirm">Confirmez le mot de passe</label>
                <input type="password" id="inputPasswordConfirm" name="password-repeat" class="form-control" placeholder="Confirmez le mot de passe" required>
              </div>
              <hr class="my-4">
              
              <button class="btn btn-lg btn-success btn-block text-uppercase" name="inscription" type="submit">S'inscrire</button>
                <div class="text-center">
                  <span class="small">Vous avez déjà un compte? </span>
                  <a class="small" href="connexion.php">Connectez-vous ici</a>
                </div>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Continuer avec Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Continuer avec Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php 
include "footer.php"
?>
