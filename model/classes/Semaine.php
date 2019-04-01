<?php
class Semaine{
	private  $JourDebut;

	public function __construct ($JourDebut){
		$this ->JourDebut=$JourDebut;
	}
	public function getJour(){
		return $this->JourDebut;
	}
	public function setjour($JourDebut){
		$this->JourDebut=$JourDebut;
	}
	public function YaEvent($JourDebut){
		$event= array();
		$chaine= substr($JourDebut,0, 10);
		$event=actionbdd("SELECT","event",["NomEvent" =>"''"], " DebutEvent LIKE '%".$chaine."%'");
		return  !is_null($event);
	}
	public function AfficheEvent($JourDebut,$event,$idUtilisateur){
		global $c;
		echo "
		<table>
		  <thead>";
		    for ($i=0; $i < 7; $i++) {
					$date=date("Y-m-d",strtotime("+".$i." days"));
		    	echo "<th>".$date."</th>";
		    }
		  echo "
			</thead>
		  <tbody>";
		    
			for ($j=0; $j  <=23; $j++) {
				echo "<tr>";
		      for ($i=0; $i < 7; $i++) {
						echo "<td >";
						$date=date("Y-m-d",strtotime("+".$i." days"));
						$requete=actionbdd("SELECT","event",["NomEvent" =>"''"], "Groupe IS NULL AND Utilisateur=$idUtilisateur AND DebutEvent<='".$date." ".sprintf("%02d", $j)."' AND FinEvent>'".$date." ".sprintf("%02d", $j)."'");
						while ($row=mysqli_fetch_assoc($requete)) {
							echo $row['NomEvent'];
						}
						//modif jonas colin
						$sql = "SELECT `idGroupe` FROM `groupe_utilisateurs` WHERE `idUtilisateurs`=$idUtilisateur";
 	       				$res = mysqli_query($c,$sql);
					    //var_dump($res);
						//exit;
						while($tab = mysqli_fetch_assoc($res)){
							//var_dump($tab);
							//exit;
							$idGroupe =  intval($tab["idGroupe"]);
							$sql2 = "SELECT `NomEvent` FROM `event` WHERE `Groupe` = $idGroupe AND DebutEvent<='".$date." ".sprintf("%02d", $j)."' AND FinEvent>'".$date." ".sprintf("%02d", $j)."'";
							//var_dump($idGroupe);
							//exit;
							$res2 = mysqli_query($c,$sql2);
							
							while($row2 = mysqli_fetch_assoc($res2)){
								echo "<p style='color:red'>".$row2['NomEvent']."</p>";
							}
						// fin modif jonas colin
							
						 }
					echo "</td>";
		      }
		    echo "</tr>";
			}
		  echo "
		  </tbody>
		</table>";
	// 	echo "
	// 	<div class='container-fluid'>
	// 		<div class='row'>
	//
	// 	";
	//
	// 	for ($i=0; $i < 7; $i++) {
	// 		$date=date("Y-m-d",strtotime("+".$i." days"));
	// 	//	var_dump($requete);
	// 		echo "
	// 			<div class='col-1'>
	// 			".$date;
	// 			echo "
	// 			</div>
	// 		";
	// 	}
	// 	for ($j=0; $j <= 23; $j++) {
	// 		echo "<div class='row'>&nbsp;";
	// 		for ($i=0; $i < 7; $i++) {
	// 			$date=date("Y-m-d",strtotime("+".$i." days"));
	// 			$requete=actionbdd("SELECT","event",["NomEvent" =>"''"], " DebutEvent LIKE '%".$date." ".sprintf("%02d", $j)."%'");
	// 		//	var_dump($requete);
	// 			echo "
	// 				<div class='col-1'>";
	// 				while ($row=mysqli_fetch_assoc($requete)) {
	// 				// 		var_dump($row);
	// 				 	echo $row['NomEvent'];
	// 				}
	// 				echo "
	// 				</div>
	// 			";
	// 		}
	// 		echo "</div>";
	// 	}
	//
	//
	// 	echo "
	// 		</div>
	// 	</div>";
	//
	// }


	}
}

?>
