<?php
session_start();
if($_SESSION['connecte']){
  echo "Bienvenue ". $_SESSION['pseudo'];
  include_once "./view/forms/logout.php";
}
else {
  include_once "./view/forms/formLogin.php";

}
 ?>
