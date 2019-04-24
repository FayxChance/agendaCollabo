<?php
  session_start();
  echo "string";
  include_once "db.php";
  

  function inviteMembres($listeMembres,$idEvent){
      global $c;

      for($i = 0; $i < sizeof($listeMembres);$i++){
           $idMembre = $listeMembres[i];
           $sql="INSERT INTO user_required(id_personne,id_event,accepted,required) VALUES ($idMembre,$idEvent,0,0)"; 
           $res =$res && mysqli_query($c,$sql);
       }
       return $res;
  }
  
    header("Location:../index.php?action=agenda");





 ?>