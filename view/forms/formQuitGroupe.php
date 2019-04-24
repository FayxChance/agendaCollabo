<?php
	include_once "/model/db.php";
	session_start();
?>

<form method="post" action="/controller/QuitGroupe.php">
	<p>
		<label for="LabelGroupeDel">Groupe à Supprimer: </label>
			<select name="groupeDel"  id="LabelGroupeDel">
					<option selected="selected">Choisissez le groupe</option>
				<?php
					$id = $_SESSION['id'];
					$sql = "SELECT groupe.idGroupe,NomGroupe from groupe JOIN groupe_utilisateurs ON groupe_utilisateurs.idGroupe = groupe.idGroupe WHERE `idUtilisateurs` = 1";
					$results = mysqli_query($c,$sql);
					while($row = mysqli_fetch_assoc($results)) {
						echo "<option value='".$row["idGroupe"]."'>".$row["NomGroupe"]."</option>";
					}
				?>
			</select>
	</p>
	<p>
		<button type="submit" name="del">Quitter le groupe</button>
	</p>
</form>
