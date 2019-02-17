<?php

namespace model\Evenement;

class Evenement {
  private String $nomEvent;
  private String $dateDebut;
  private String $dateFin;
  private String $desc;

  public function __construct(String $nomEvent,String $dateDebut, String $dateFin, String $desc){
    $this->$nomEvent=$nomEvent;
    $this->$dateDebut=$dateDebut;
    $this->$dateFin=$dateFin;
    $this->$desc=$desc;
  }
  public function getNomEvent(){
    return $this->$nomEvent;
  }
  public function getDateDebut(){
    return $this->$dateDebut;
  }
  public function getDateFin(){
    return $this->$dateFin;
  }
  public function getDesc(){
    return $this->$desc;
  }
}
