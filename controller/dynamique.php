<?php
  switch ($_GET['action']) {
    case 'agenda':
      include_once "./view/layouts/agenda.php";
      break;
    default:
      include_once "./view/layouts/login.php";
      break;
  }
 ?>
