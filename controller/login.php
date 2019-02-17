<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";

  if(is_null(actionbdd("SELECT","Utilisateurs",["*"=>"''"],"Pseudo=".$_POST['Pseudo']))) ? actionbdd("INSERT","Utilisateurs",
  ["Pseudo"=>$_POST["pseudo"],
  "Mdp"=>$_POST["password"],
  "Mail"=>$_POST["email"]
  ]);
 ?>
