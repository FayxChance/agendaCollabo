<!-- Select all / Add / Del / Update / Select / -->
<?php
  function select_all($nomTab){
    //Renvoie tous les elements d'une table
    global $c;
    $sql = "SELECT * FROM `$nomTab` WHERE 1";
    return mysqli_query($c,$sql);
  }

  function actionbdd($requete,$nomTab, $data, $condition){
    //Insert les elements de $data dans la bd renseignée
    //__________________GUIDE UTILISATION__________________
    //$requete : DELETE / UPDATE / INSERT / SELECT
    //$nomTab : Nom de la table concernée
    //$data : les informations que vous voulez insérer (par exemple) sous forme de tableau
    //$condition : condition de suppression (si aucune condition nécéssaire, renseigner 0)
    //EXEMPLE :
    // actionbdd(INSERT,"utilisateur", ["Nom"=>"'Mabite'"],0) ;
    // actionbdd("DELETE","utilisateur", [],"id=2") ; Supprime dans la table utilisateur la ligne dont l'id est 2
    global $c;
    $keyT = "";
    $valueT = "";
    foreach ($data as $key => $value) {
      $keyT = $keyT . $key . ",";
      $valueT = $valueT . $value . ",";
    }
    $keyT = substr($keyT, 0, -1);;  // retourne "abcde"
    $valueT = substr($valueT,0, -1);

    if ($requete == "INSERT") {
      $sql = "INSERT INTO `$nomTab`($keyT) VALUES ($valueT)";
    }

    elseif ($requete == "DELETE") {
      $sql = "DELETE FROM `$nomTab` WHERE $condition";
    }
    elseif ($requete == "SELECT") {
      $sql = "SELECT `$keyT` FROM `$nomTab` WHERE $condition"
    }
    var_dump($sql);
    //return mysqli_query($c,$sql);
  }
  ?>
