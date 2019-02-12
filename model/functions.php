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
    //insert("utilisateur",['prenom'=>"toto",'nom'=>"toto"])
    global $c;
    $keyT = "";
    $valueT = "";
    foreach ($data as $key => $value) {
      $keyT = $keyT . $key . ",";
      $valueT = $valueT . $value . ",";
    }
    substr($keyT, 0, -1);  // retourne "abcde"
    substr($valueT, -1);

    $sql = "INSERT INTO `$nomTab`($keyT) VALUES ($valueT)";
    var_dump($sql);
    //return mysqli_query($c,sql);
  }






















 ?>
