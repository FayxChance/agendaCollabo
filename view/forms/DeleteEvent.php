<?php
	include_once "./model/db.php";
	include_once "./model/functions.php";

?>

<form method="post" action="./controller/DeleteEvent.php">
	<p>
		<label for="LabelEventDel">Event à Supprimer: </label>
			<select name="EventDel"  id="LabelEventDel">
					<option selected="selected">Choisissez l'Event</option>
				<?php
					$id=$_SESSION['id'];
					$sql = "SELECT `NomEvent`, `idEvent` from event WHERE Utilisateur=$id  AND Groupe IS NULL order by NomEvent ";
					$results = mysqli_query($c,$sql);
					while($row = mysqli_fetch_assoc($results)) {
					echo "<option value='".$row["idEvent"]."'>".$row["NomEvent"]."</option>";
					}
				?>
			</select>
	</p>
	<p>
		<button type="submit" name="del">Supprimer l'Event</button>
	</p>
</form>
