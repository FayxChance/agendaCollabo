<?php
session_start();

include_once "./view/layouts/header.php";
include_once "./view/forms/formAjoutEvent.php";
include_once "./model/classes/Semaine.php";
include_once "./model/db.php";
include_once "./model/functions.php";
 ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset = "utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>Accueil</title>


	</head>
	<body>

<?php
  include_once "./controller/dynamique.php";

  if(isset($_SESSION['connecte'])){

  $maSemaine=new Semaine(date("Y-m-d"));
  $maSemaine->AfficheEvent(0,0,$_SESSION['id']);
  $date = date('m/d/Y h:i:s a', time());
}
else {
  include_once "./view/forms/formLogin.php";
}
  include_once "./view/layouts/footer.php";
 ?>
