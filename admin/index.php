<?php
session_start();



include("includes/config.php");
include($_SERVER["DOCUMENT_ROOT"]."includes/url.php");
include($_SERVER["DOCUMENT_ROOT"]."model/class.phpmailer.php");
include($_SERVER["DOCUMENT_ROOT"]."model/class.pop3.php");
include($_SERVER["DOCUMENT_ROOT"]."model/class.smtp.php");

include($_SERVER["DOCUMENT_ROOT"]."model/categorias.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/noticias.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/usuarios.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/parceiros.class.php");




if(!isset($_SESSION['logged'])){
	include($_SERVER["DOCUMENT_ROOT"]."includes/login.php");
	exit;
}

if($urlreservada[$url[$urlInicioConfig]]){
  include($_SERVER["DOCUMENT_ROOT"]."includes/sessoes.php");
  include($_SERVER["DOCUMENT_ROOT"]."controller/".$urlreservada[$url[$urlInicioConfig]]);
} else {
  include($_SERVER["DOCUMENT_ROOT"]."controller/index.php");
}

?>