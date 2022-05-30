<?php

if($url[2] == "sair"){
	$opLogin = "sair";
	include($_SERVER["DOCUMENT_ROOT"]."/includes/login.php");
  exit();
}

if($_SESSION["logged"]){
  include($_SERVER["DOCUMENT_ROOT"]."/controller/index.php");
  exit();
}


include('views/'.'login.php');