<?php include_once "../model/functions.php"
  session_start();
  actionbdd("INSERT","Event",
  ["NomEvent"=>"'".$_POST['nomEvent']."'"])
 ?>
