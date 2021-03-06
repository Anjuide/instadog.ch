<?php 
$title = "Profil de l'utilisateur";
include "header.php"
?>

<div class="image">
    <img src="http://usercontent.packdog.com/bg/cba09d6ce00c5d8834d03472d90472af818c8d7d_595C1012.jpg" class="img-fluid" alt="Responsive image">
</div>      
    <div class="statbox regularstatbox white white20">
		<h2><a href="#" class="collapsable">Barney</a></h2>
		<ul>
            <li>29.01.2019</li>

			<li><a href="http://packdog.com/breed/border-collie">The Border Collie Pack</a></li>	
				
				<li><a href="http://packdog.com/location/ledbury">Genève, CH</a></li>
		
		</ul>
	</div>
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

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
<!-- <div class="container">
    <h1>Ce chien monté sur ressort vous contaminera avec sa joie de vivre</h1>
    <div class="row">
    <div class="col-sm-8">
        <img src="data:image/jpeg;base64,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" class="align-self-start mr-3" alt="...">    
    </div>
    <div class="col-sm-4">col-sm-4</div>
  </div>
    
    <div class="media">
        <img src="data:image/jpeg;base64,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" class="align-self-start mr-3" alt="...">
        <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</div> -->
<?php 
include "footer.php"
?>