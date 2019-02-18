<?php include_once "../model/functions.php"
  session_start();

  actionbdd(INSERT,"Event", [
    "NomEvent"=>"'".$_POST['NomEvent']."'",
    "Description"=>"'".$_POST['description']."'"
    "DebutEvent"=>"'".$_POST['dateEventDebut']."'",
    "FinEvent"=>"'".$_POST['dateEventFin']."'",
    "Utilisateur"=>"".$_SESSION['id'].""]
    ,0);
 ?>
