<?php
  session_start();
  include_once "../model/db.php";
  include_once "../model/functions.php";
  global $c;
  $id = $_SESSION['id'];
  $nom = $_POST['nomGroupe'];
  $verifbool = false;

  //Acquisition des nom de grp de la bdd pour vérification (si deja exitant)
  $verif = "SELECT `NomGroupe` FROM `groupe`";
  $verif = mysqli_query($c,$verif);
  $null = mysqli_fetch_array($verif);
  if (empty($null) == false) {
    while($row = $verif->fetch_array()) {
      if ($row["NomGroupe"] == $nom) {
        $verifbool = true;
      }
    }
  }
  //If: le nom de groupe est disponible  && else: s'il ne l'est pas
  if ($verifbool == false) {
    $sql= "INSERT INTO `groupe`(`NomGroupe`, `Utilisateurs`) VALUES ('$nom',$id)";
    $sqldgrp = "SELECT `idGroupe`FROM `groupe` WHERE `NomGroupe` = '$nom'";
    mysqli_query($c,$sql);
    //Recuperation ID groupe
    $data  =  mysqli_query($c,$sqldgrp);
    $data = mysqli_fetch_array($data);
    $data = $data["idGroupe"];
    $sqlpont = "INSERT INTO `groupe_utilisateurs`(`idGroupe`, `idUtilisateurs`) VALUES ($data,$id)";
    mysqli_query($c,$sqlpont);
  } else {
      $_SESSION['erreur']['nomAjoutGroupe']="Un groupe porte déjà ce nom";
  }
  header("Location:../index.php?action=agenda");
?>
