<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";
  session_start();
  var_dump($_POST['EventDel']);
  actionbdd("DELETE","event", [],"NomEvent=".$_POST['EventDel']."") ;
  //actionbdd("DELETE","event", [],"NomEvent=''.$_POST['EventDel'].''") ;
//  actionbdd("DELETE","utilisateur", [],"id=2")
 ?>
