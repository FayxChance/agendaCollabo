<?php
include_once "./view/layouts/header.php";
session_start();
if($_SESSION['connecte']){
  echo "Bienvenue ". $_SESSION['pseudo'];
  include_once "./view/forms/logout.php";
  include_once "./model/classes/Semaine.php";
  $maSemaine=new Semaine(date("Y-m-d"));
  $maSemaine->AfficheEvent(0,0);
  $date = date('m/d/Y h:i:s a', time());
}
else {
  include_once "./view/forms/formLogin.php";

}
 ?>
