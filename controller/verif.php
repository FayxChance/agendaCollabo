<?php
  session_start();
  unset($_SESSION['error']);

//__________CONNEXION__________//
  if(isset($_POST['connexionLogin']) && $_POST['connexionLogin']=='Connexion') {

      if(!empty($_POST['pseudoLogin']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['pseudoLogin']) && strlen($_POST['pseudoLogin'])<20){
        unset($_SESSION["error"]["pseudoLogin"]);
        $_SESSION['data']['pseudoLogin']=$_POST['pseudoLogin'];

      }
      else{
        $_SESSION['error']['pseudoLogin']="Erreur dans le pseudo.";
      }
      if(!empty($_POST['passwordLogin']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['passwordLogin']) && strlen($_POST['passwordLogin'])<16){
        unset($_SESSION["error"]["passwordLogin"]);
        $_SESSION['data']['passwordLogin']=$_POST['passwordLogin'];
      }
      else{
        $_SESSION['error']['passwordLogin']="Erreur dans le mot de passe.";
      }

  }
  //__________INSCRIPTION__________//
  else if(isset($_POST['inscription']) && $_POST['inscription']=='Inscrire') {
      if(!empty($_POST['pseudo']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['pseudo']) && strlen($_POST['pseudo'])<20){
        unset($_SESSION["error"]["pseudo"]);
        $_SESSION['data']['pseudo']=$_POST['pseudo'];
      }
      else{
        $_SESSION['error']['pseudo']="Veuillez entrer un pseudo valide.";
      }
      if(!empty($_POST['password']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['password']) && strlen($_POST['password'])<16){
        unset($_SESSION["error"]["password"]);
        $_SESSION['data']['password']=$_POST['password'];
      }
      else{
        $_SESSION['error']['password']="Veuillez entrer un mot de passe valide.";
      }
      if(!empty($_POST['email']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$_POST['email'])){
        unset($_SESSION["error"]["email"]);
        $_SESSION['data']['email']=$_POST['email'];
      }
      else{
        $_SESSION['error']['email']="Veuillez entrer une adresse mail valide.";
      }
  }
//__________AJOUT EVENT__________//
  else if(isset($_POST['submitAjoutEvent']) && $_POST['submitAjoutEvent']=='Ajouter'){
    if(!empty($_POST['nomEvent']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['nomEvent']) && strlen($_POST['nomEvent'])<40){
      unset($_SESSION["error"]["nomEvent"]);
      $_SESSION['data']['nomEvent']=$_POST['nomEvent'];
    }
    else{
      $_SESSION['error']['nomEvent']="Veuillez entrer un nom d'evenement valide.";
    }
  }
 ?>
