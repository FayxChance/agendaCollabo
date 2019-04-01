<?php
  session_start();
  include_once "../model/db.php";
  include_once "../model/functions.php";

  //Données
  $groupe = $_POST["groupeDel"];

  $sql = "DELETE FROM `groupe` WHERE `NomGroupe` = '$groupe'";
  mysqli_query($c,$sql);
  header("Location:../index.php?action=agenda");
?>
