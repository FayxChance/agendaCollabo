<!-- Select all / Add / Del / Update / Select / -->
<?php
  function select_all($nomTab){
    //Renvoie tous les elements d'une table
    global $c;
    $sql = "SELECT * FROM `$nomTab` WHERE 1";
    return mysqli_query($c,$sql);
  }

  function insert($nomTab, $data){
    //Insert les elements de $data dans la bd renseignée
    global $c;
    $sql = "DELETE FROM `$nomTab` WHERE 1"
    return mysqli_query($c,sql);
  }






















 ?>
