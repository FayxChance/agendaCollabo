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
	public function Setjour($JourDebut){
		$this->JourDebut=$JourDebut;
	}
	public function YaEvent($JourDebut){
		$event= array();
		$chaine= substr($JourDebut,0, 10);
		$event=actionbdd("SELECT","Event",["NomEvent" =>"''"], $chaine);
		return  empty($event);
	}
	public AfficheEvent($JourDebut){




	}

}

?>
