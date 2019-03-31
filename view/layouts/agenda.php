<?php



include_once "./layouts/header.php";
include_once "../model/classes/Semaine.php";
include_once "../model/classes/Semaine.php";

$maSemaine=new Semaine(date("Y-m-d"));
$maSemaine->AfficheEvent(0,0,$_SESSION['id']);
$date = date('m/d/Y h:i:s a', time());
  
include_once "./layouts/footer.php";

 ?>