<?php
session_start();
$c = mysqli_connect('localhost', "root", "root", "l2_gr5");
include_once "model/functions.php";
include_once "model/classes/Semaine.php";
include_once "./view/forms/formLogin.php";
include_once "./view/forms/formAjoutEvent.php";
 //actionbdd("SELECT","Utilisateurs", ["Nom"=>"''"],"idUtilisateurs=3");
 $maSemaine=new Semaine(date("Y-m-d"));
 var_dump($maSemaine->YaEvent($maSemaine->getJour()));
