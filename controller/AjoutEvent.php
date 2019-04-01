<?php
  session_start();
  echo "string";
  include_once "../model/db.php";
  include_once "../model/functions.php";
  $heureDebut=substr($_POST['dateEventDebut'],0,10)." ".substr($_POST['dateEventDebut'],11,5).":00";
  $heureFin=substr($_POST['dateEventFin'],0,10)." ".substr($_POST['dateEventFin'],11,5).":00";
  var_dump($heureDebut);
  $id= $_SESSION['id'] ;
   $selectEventUtilisateur="SELECT COUNT(*) FROM event WHERE Utilisateur=$id AND (
    ('$heureDebut' BETWEEN DebutEvent AND FinEvent) OR
     ('$heureFin' BETWEEN DebutEvent AND FinEvent) OR
     (DebutEvent BETWEEN '$heureDebut' AND '$heureFin') OR
      (FinEvent BETWEEN '$heureDebut' AND '$heureFin') )";
   $resEventUtilisateur = mysqli_query($c,$selectEventUtilisateur);
   $row=mysqli_fetch_assoc($resEventUtilisateur);
   var_dump(intval($row["COUNT(*)"]));
   if(intval($row["COUNT(*)"])==0){
     $requete=actionbdd("INSERT","event", [
       "NomEvent"=>"'".$_POST['nomEvent']."'",
       "Description"=>"'".$_POST['description']."'",
       "DebutEvent"=>"'".$heureDebut."'",
       "FinEvent"=>"'".$heureFin."'",
       "Utilisateur"=>$_SESSION['id']
       ]
       ,0);
   }
   

    //var_dump($requete);
    header("Location:../index.php?action=agenda");





 ?>
