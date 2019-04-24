<?php
  include_once "../model/db.php";
  session_start();
  $idUser=$_SESSION['id'];
  $idGroupe = $_POST['groupeDel'];
  $idGroupe = intval($idGroupe);
  $sql = "DELETE FROM `groupe_utilisateurs` WHERE `idUtilisateurs` = $idUser and `idGroupe` = $idGroupe";
  // var_dump($sql);
  // exit;
  mysqli_query($c,$sql);
  header("Location:../index.php?action=agenda");
 ?>
