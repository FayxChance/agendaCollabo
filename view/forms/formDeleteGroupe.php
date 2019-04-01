<?php
	include_once "./model/db.php";
	include_once "./model/functions.php";

?>

<form method="post" action="./controller/DeleteGroupe.php">
	<p>
		<label for="LabelGroupeDel">Groupe à Supprimer: </label>
			<select name="groupeDel"  id="LabelGroupeDel">
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
	</p>
	<p>
		<button type="submit" name="del">Supprimer l'Event</button>
	</p>
</form>
