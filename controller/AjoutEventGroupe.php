<?php session_start();
echo "string";
include_once "../model/db.php";
include_once "../model/functions.php";
$nomGroupe=$_POST['groupeAdd'];
$sql="SELECT idGroupe FROM groupe WHERE NomGroupe='$nomGroupe'";
$result=mysqli_query($c,$sql);
$row=mysqli_fetch_assoc($result);

$heureDebut=substr($_POST['dateEventDebut'],0,10)." ".substr($_POST['dateEventDebut'],11,5).":00";
$heureFin=substr($_POST['dateEventFin'],0,10)." ".substr($_POST['dateEventFin'],11,5).":00";
$requete=actionbdd("INSERT","event", [
  "NomEvent"=>"'".$_POST['nomEvent']."'",
  "Description"=>"'".$_POST['description']."'",
  "DebutEvent"=>"'".$heureDebut."'",
  "FinEvent"=>"'".$heureFin."'",
  "Utilisateur"=>$_SESSION['id'],
  "Groupe"=>$row['idGroupe']
  ]
  ,0);
  var_dump($requete);
  header("Location:../index.php?action=agenda");
