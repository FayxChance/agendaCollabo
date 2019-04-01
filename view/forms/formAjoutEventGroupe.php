<?php session_start(); ?>

<div class="row">
  <div class="formAction" id="formAjoutEventGroupe">
    <h3 class="text-center"> Ajout d'un Evenement à un groupe </h3>
    <form class="well" method="post" action="./controller/AjoutEventGroupe.php">
      <div class="form-group">
        <label for="nom"> Nom </label>
        <input  class="form-control" type="text" name="nomEvent" placeholder="Nom"  />
      </div>
      <div class="form-group">
        <label for="dateDebut"> Date début </label>
        <input type="datetime-local" name="dateEventDebut" value="">
      </div>
      <div class="form-group">
        <label for="dateFin"> Date fin </label>
        <input type="datetime-local" name="dateEventFin" value="">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" placeholder="Entrer une description (optionnel)"></textarea>
      </div>
      <p>
    		<label for="LabelGroupeAdd">Groupe à ajouter: </label>
    			<select name="groupeAdd"  id="LabelGroupeAdd">
    					<option selected="selected">Choisissez le groupe</option>
    				<?php
    					$id=$_SESSION['id'];
    					$sql = "SELECT NomGroupe from groupe WHERE Utilisateurs=$id  order by NomGroupe ";
    					$results = mysqli_query($c,$sql);
    					while($row = mysqli_fetch_assoc($results)) {
    					echo "<option>".$row["NomGroupe"]."</option>";
    					}
    				?>
    			</select>
    	</p>
      <div class="form-group">
        <input class="btn btn-default" type="submit" name="submitAjoutEvent" value="Ajouter">
      </div>
    </form>
  </div>

</div>
