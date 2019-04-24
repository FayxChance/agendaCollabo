<?php session_start();

//Insere l'evenement du groupe dans la table event
  echo "string";
  include_once "../model/db.php";
  include_once "../model/functions.php";
  $nomGroupe=$_POST['groupeAdd'];
  $sql="SELECT idGroupe FROM groupe WHERE NomGroupe='$nomGroupe'";
  $result=mysqli_query($c,$sql);
  $row2=mysqli_fetch_assoc($result);
  $idGroupe=$row2['idGroupe'];
  $heureDebut=substr($_POST['dateEventDebut'],0,10)." ".substr($_POST['dateEventDebut'],11,5).":00";
  $heureFin=substr($_POST['dateEventFin'],0,10)." ".substr($_POST['dateEventFin'],11,5).":00";
  $id= $_SESSION['id'] ;
  $selectEventUtilisateur="SELECT COUNT(*) FROM event WHERE Groupe=$idGroupe AND Utilisateur=$id AND (
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
      "Utilisateur"=>$_SESSION['id'],
      "Groupe"=>$row2['idGroupe']
      ]
      ,0);
  }

//invite tous les utilisateurs du groupe à participer à l'evenement ajouté:

//recuperation des id de chaque membre du groupe
$global $c;
$id= mysqli_insert_id($c);

$selectMembres = "SELECT `member` FROM member_group JOIN groups ON `group`=`id` WHERE  `name`='$nomGroupe' ";
$res= mysqli_query($c,$selectMembres);

while($tabIdMembres=mysqli_fetch_assoc($res)){
  $idMembres[ ]= $tabIdMembres["member"];
}

//appel a inviteMembres pour inviter chaque membre a l'evenement
inviteMembres($idMembres,$id);


  header("Location:../index.php?action=agenda");
