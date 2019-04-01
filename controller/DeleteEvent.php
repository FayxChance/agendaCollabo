<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";
  //var_dump($_POST['EventDel']);
  actionbdd("DELETE","event", [],"NomEvent='".$_POST['EventDel']."'") ;
  header("Location:../index.php?action=agenda");
 ?>
