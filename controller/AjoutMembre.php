<?php
session_start();
include_once "../model/db.php";
include_once "../model/functions.php";

  $nomGroupe=$_POST['GroupeAjoutMembre'];
  $pseudo = $_POST['nomMembre'];
  $sqlGroupe = "SELECT idGroupe FROM groupe WHERE NomGroupe='$nomGroupe'";
  $sqlMembre = "SELECT idUtilisateurs FROM utilisateurs WHERE Pseudo='$pseudo'";
  $resultGroupe=mysqli_query($c,$sqlGroupe);
  $resultMembre=mysqli_query($c,$sqlMembre);
  var_dump($sqlMembre);
  $rowGroupe=mysqli_fetch_assoc($resultGroupe);
  $rowMembre=mysqli_fetch_assoc($resultMembre);
  if((!is_null($rowGroupe) && !is_null($rowGroupe))){
    $idGroupe=$rowGroupe['idGroupe'];
    $idUtilisateurs=$rowMembre['idUtilisateurs'];
    $sql="INSERT INTO groupe_utilisateurs(idGroupe, idUtilisateurs) VALUES ($idGroupe,$idUtilisateurs)";
    mysqli_query($c,$sql);

  }
  header("Location:../index.php?action=agenda");
 ?>
