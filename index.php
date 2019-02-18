<?php
session_start();
if($_SESSION['connecte']){
  echo "Bienvenue ". $_SESSION['pseudo'];
  include_once "./view/forms/logout.php";
  include_once "./view/forms/formAjoutEvent";
}
else {
  include_once "./view/forms/formLogin.php";
}

 ?>
