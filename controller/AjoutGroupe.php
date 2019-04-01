<?php
  session_start();
  include_once "../model/db.php";
  include_once "../model/functions.php";
  $id = $_SESSION['id'];
  $nom = $_POST['nomGroupe'];

  //Ajout dans Groupe
  $sql= "INSERT INTO `groupe`(`NomGroupe`, `Utilisateurs`) VALUES ('$nom',$id)";
  $sqldgrp = "SELECT `idGroupe`FROM `groupe` WHERE `NomGroupe` = '$nom'";

  mysqli_query($c,$sql);
  //Recuperation ID groupe
  $data  =  mysqli_query($c,$sqldgrp);
  $data = mysqli_fetch_array($data);
  $data = $data["idGroupe"];
  $sqlpont = "INSERT INTO `groupe_utilisateurs`(`idGroupe`, `idUtilisateurs`) VALUES ($data,$id)";
  mysqli_query($c,$sqlpont);

  header("Location:../index.php?action=agenda");
?>
