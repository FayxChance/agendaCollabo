<?php
include_once ("../functions.php");
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
		var_dump($chaine);
		$event=actionbdd("SELECT","Event",["NomEvent" =>"''"], " DebutEvent LIKE '%".$chaine."%'");
		return  !is_null($event);
	}
	public function AfficheEvent($JourDebut,$event,$idUtilisateur){
		echo "
		<div class='container-fluid'>
			<div class='row'>

		";
		for ($i=0; $i < 7; $i++) {
			$date=date("Y-m-d",strtotime("+".$i." days"));
			echo "
				<div class='col-1'>
				".$date;
				//$requete=actionbdd("SELECT","event",["NomEvent"=>"''"],"Utilisateur=$idUtilisateur AND DebutEvent LIKE '%".$date."%'");
				// while ($row=mysqli_fetch_assoc($requete)) {
				// 	echo $row['NomEvent'];
				// }
				echo "
				</div>
			";
		}
		echo "
			</div>
		</div>";

	}

}

?>
