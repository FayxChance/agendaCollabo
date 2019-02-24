<?php
include_once "../model/db.php";
include_once "../model/functions.php";

session_start();
echo "string";
var_dump($_POST);
if ($_POST['connexionLogin']=="Connexion" && isset($_POST['connexionLogin'])) {
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
header("Location:../index.php");

 ?>
