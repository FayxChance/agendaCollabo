<?php
  switch ($_GET['action']) {
    case 'agenda':
      include_once "./view/layouts/agenda.php";
      break;
    case 'groupe':
     include_once "./view/layouts/groupe.php";
     break;
    default:
      include_once "./view/layouts/login.php";
      break;
  }
 ?>
