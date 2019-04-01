<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";
  $id = $_POST['EventDel'];
  // var_dump($id);
  // exit;
  actionbdd("DELETE","event", [],"idEvent='".$id."'") ;
  header("Location:../index.php?action=agenda");
 ?>
