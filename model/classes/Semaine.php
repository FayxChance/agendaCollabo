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
	// public AfficheEvent($JourDebut){
	//
	//
	//
	//
	// }

}

?>
