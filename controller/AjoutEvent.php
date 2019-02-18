<?php
  session_start();
  echo "string";
  include_once "../model/functions.php";
  $requete=actionbdd("INSERT","event", [
    "NomEvent"=>"'".$_POST['NomEvent']."'",
    "Description"=>"'".$_POST['description']."'"
    "DebutEvent"=>"'".$_POST['dateEventDebut']."'",
    "FinEvent"=>"'".$_POST['dateEventFin']."'",
    "Utilisateur"=>$_SESSION['id']
    ]
    ,0);
 ?>
