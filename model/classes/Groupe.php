<?php
class Groupe{
	
	public function AfficheGroupe($idUtilisateur){
		global $c;
	    $requete="SELECT `name` FROM groups JOIN member_group ON id=$group WHERE $idUtilisateur=$member";
        $sql=mysqli_query($c,$requete);
		while ($row=mysqli_fetch_assoc($sql)) {
			echo $row['name'];
		 }
    }
?>