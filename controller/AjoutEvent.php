<?php include_once "../model/functions.php"
  session_start();

  actionbdd(INSERT,"Event", [
    "idEvent"=>"''",
    "nomEvent"=>"'.$_POST['nomEvent'].'",
    "Debut"=>"'.$_POST['dateEventDebut'].'",
    "Fin"=>"'.$_POST['dateEventFin'].'",
    "Desc"=>"'.$_POST['description'].'"],0);
 ?>
