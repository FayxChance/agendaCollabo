<?php

	include_once "./model/db.php";
	include_once "./model/functions.php";


 ?>

<div class="row">
  <div class="formAction" id="formAjoutMembre">
    <h3 class="text-center"> Ajout d'un membre à un groupe </h3>
    <form class="well" method="post" action="./controller/AjoutMembre.php">
      <div class="form-group">
        <label for="LabelGroupeAjout">Groupe à ajouter: </label>
    			<select name="GroupeAjoutMembre"  id="GroupeAjoutMembre">
    					<option selected="selected">Choisissez le groupe</option>
    				<?php
    					$id=$_SESSION['id'];
    					$sql = "SELECT NomGroupe from groupe WHERE Utilisateurs=$id order by NomGroupe ";
    					$results = mysqli_query($c,$sql);
    					while($row = mysqli_fetch_assoc($results)) {
    					echo "<option>".$row["NomGroupe"]."</option>";
    					}
    				?>
    			</select>
      </div>
      <div class="form-group">
        <label for="groupe">Pseudo</label>
        <input class="form-control" type="text" name="nomMembre" placeholder="Pseudo">
      </div>
      <div class="form-group">
        <input class="btn btn-default" type="submit" name="submitAjoutMembreGroupe" value="Ajouter">
      </div>
    </form>
  </div>

</div>
