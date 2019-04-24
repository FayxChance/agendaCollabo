<?php
class Groupe{
	
	public function AfficheGroupe($idUtilisateur){
		global $c;
		$res=array();
	    $requete="SELECT `id`,`name` FROM groups JOIN member_group ON id=$group WHERE $idUtilisateur=$member";
        $sql=mysqli_query($c,$requete);
		while ($row=mysqli_fetch_assoc($sql)) {
			$res[ ] = array("id" =>$sql["id"], "name" => $sql["name"]);
			
						
		}
		return $res;
	} 
 }
?>