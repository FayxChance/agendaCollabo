<?php
	include_once "./model/db.php";
	include_once "./model/functions.php";
?>

<form method="post" action="./controller/DeleteEvent.php">
	<p>
		<label for="LabelEventDel">Event à Supprimer: </label>
    <p>
      <label for="LabelGroupeAdd">Groupe à ajouter: </label>
        <select name="groupeAdd"  id="LabelGroupeAdd">
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
			<select name="EventDel"  id="LabelEventDel">
					<option selected="selected">Choisissez l'Event</option>
				<?php
					$id=$_SESSION['id'];
					$sql = "SELECT NomEvent from event WHERE Utilisateur=$id AND Groupe IS NOT NULL order by NomEvent ";
					$results = mysqli_query($c,$sql);
					while($row = mysqli_fetch_assoc($results)) {
					echo "<option>".$row["NomEvent"]."</option>";
					}
				?>
			</select>
	</p>
	<p>
		<button type="submit" name="del">Supprimer l'Event</button>
	</p>
</form>
