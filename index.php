<?php
session_start();
if(isset($_SESSION['connecte'])){
  echo "Bienvenue ". $_SESSION['pseudo'];
  include_once "./view/forms/logout.php";
  include_once "./view/forms/formAjoutEvent.php";
}
else {
  include_once "./view/forms/formLogin.php";
}

 ?>
