<?php
  include_once "../model/db.php";
  include_once "../model/functions.php";
  session_start();
  //var_dump($_SESSION['error']);
//if (empty($_SESSION['error'])) {
    $recherche =actionbdd("SELECT","utilisateurs",["*"=>"''"],"Pseudo="."'".$_POST['pseudo']."'");
    $res=(mysqli_fetch_assoc($recherche));
    if(is_null($res)){
      $requete=actionbdd("INSERT",
      "utilisateurs",
        ["Pseudo"=>"'".$_POST["pseudo"]."'",
        "Mdp"=>"'".$_POST["password"]."'",
        "Mail"=>"'".$_POST["email"]."'",
        "Role"=>"'utilisateur'"
      ],0);
      mysqli_free_result($recherche);
      mysqli_free_result($requete);
    }
   }
   //unset($_SESSION['data']);

  header("Location:../index.php");
 ?>
