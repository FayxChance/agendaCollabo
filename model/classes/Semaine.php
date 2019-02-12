<?php
include_once ("../functions.php");
class Semaine{
	private string $JourDebut;

	public function __construct ($JourDebut){
		$this ->JourDebut=$JourDebut;
	}
	public function GetJour(){
		return $this->JourDebut;
	}
	public function Setjour(){
		$this->JourDebut=JourDebut;
	}
	public function YaEvent($JourDebut){
		$event= array();
		$chaine= substr(DebutEvent,0, 10);
		$event=actionbdd("SELECT","Event",["NomEvent" =>"''"], $chaine=$JourDebut);
		return != empty($event);
	}
	public AfficheEvent($JourDebut){
	
	
		
	
	}

}

?>