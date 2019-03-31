<?php
session_start();

include_once "./view/layouts/header.php";
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
  include_once "./view/forms/formAjoutGroupe.php";

 if(isset($_GET['action'])){
    include_once "./controller/dynamique.php";
 }
else {
  include_once "./view/forms/formLogin.php";
}

  include_once "./view/layouts/footer.php";
 ?>
