<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";

  $recherche = actionbdd("SELECT","Utilisateurs",["*"=>"''"],"=".$_POST['Pseudo']);
 ?>
