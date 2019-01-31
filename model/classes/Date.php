<?php
class Date {
  private  $date;     // STRING
  private $evenement; // Array

  public __construc($date,$event){
    $this->$date=$date;
    $this->$evenement=$event;
  }
  public getDate(){
    return this->$date;
  }
  public getEvenement(){
    return this->$evenement;
  }
  public setDate($date){
    this->$date=$date;
  }
  public setEvenement($event){
    this->$evenement=$event;
  }


}
 ?>
