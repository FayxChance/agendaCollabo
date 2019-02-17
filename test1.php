<?php
$c = mysqli_connect('localhost', "root", "", "test");
include_once "model/functions.php";

?>

<?php


 actionbdd("SELECT","utilisateur", ["Nom"=>"''"],"id=3") ;


  ?>
