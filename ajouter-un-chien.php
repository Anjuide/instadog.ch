<?php 
$title = "Ajouter Un Chien";
include "header.php"
?>
<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Chien</h5>
                    <form class="form-signin" action="ajouter-un-chien-form.php" method="POST" enctype="multipart/form-data" >
                        <div class="form-label-group">
                            <label for="inputPrenom">Nom du chien</label>
                            <input type="text" id="inputPrenom" name ="nickname" class="form-control" placeholder="NickeNom" required autofocus> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputNom"></label>
                            <input type="Date" id="inputNom" name ="birthday" class="form-control" placeholder="Date" required> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputPays">Téléverser la photo de votre chien</label>
                            <input type="file" id="inputPhoto" name ="picture" class="form-control" placeholder="Téléverser la photo de votre chien" required> 
                        </div>
   
                        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
                    </div>
                    <select class="custom-select" name ="race1" id="inputGroupSelect01">
                        <option selected>Choisir...</option>
                        <option value="1">Race 1</option>
                        <option value="2">Race 2</option>
                        <option value="3">Race 3</option>
                        <option value="4">Race 4</option>
                        <option value="5">Race 5</option>
                        <option value="6">Race 6</option>
                        <option value="7">Race 7</option>
                        <option value="8">Race 8</option>
                    </select>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
                    </div>
                    <select class="custom-select" name ="race2" id="inputGroupSelect01">
                    <option selected>Choisir...</option>
                        <option value="1">Race 1</option>
                        <option value="2">Race 2</option>
                        <option value="3">Race 3</option>
                        <option value="4">Race 4</option>
                        <option value="5">Race 5</option>
                        <option value="6">Race 6</option>
                        <option value="7">Race 7</option>
                        <option value="8">Race 8</option>
                    </select>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase btn-aj-ch" name="ajouterDog" type="submit">Enregistrer</button>
                </div> 
            </div>
        </div>      
    </div>
</div>






<?php 
include "footer.php"
?>