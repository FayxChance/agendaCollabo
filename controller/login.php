<?php
include_once "../model/db.php";
include_once "../model/functions.php";

session_start();
echo "string";
//var_dump($_SESSION['error']);
if (empty($_SESSION['error'])) {
 $recherche =actionbdd("SELECT","utilisateurs",["*"=>"''"],"Pseudo='".$_POST['pseudoLogin']."' AND Mdp='".$_POST['passwordLogin']."'");
  $res=(mysqli_fetch_assoc($recherche));
  if(is_null($res)){
    $_SESSION['error']['login']= "Wrong pseudo or password";
  }
   else {
     $_SESSION['connecte']=true;
     $_SESSION['pseudo']=$res['Pseudo'];
     $_SESSION['password']=$res['Mdp'];
     $_SESSION['id']=$res['idUtilisateurs'];
   }
 }
unset($_SESSION['data']);
header("Location:../index.php");

 ?>
