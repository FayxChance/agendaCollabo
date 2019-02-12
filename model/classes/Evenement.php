<?php

namespace model\Evenement;

class Evenement {
  private String $nomEvent;
  private String $dateDebut;
  private String $dateFin;
  private String $desc;

  public __construct(String $nomEvent,String $dateDebut, String $dateFin, String $desc){
    $this->$nomEvent=$nomEvent;
    $this->$dateDebut=$dateDebut;
    $this->$dateFin=$dateFin;
    $this->$desc=$desc;
  }
  public getNomEvent(){
    return $this->$nomEvent;
  }
  public getDateDebut(){
    return $this->$dateDebut;
  }
  public getDateFin(){
    return $this->$dateFin;
  }
  public getDesc(){
    return $this->$desc;
  }
}
