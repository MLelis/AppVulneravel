<?php

include("includes/config.php");
include($_SERVER["DOCUMENT_ROOT"]."includes/url.php");
include($_SERVER["DOCUMENT_ROOT"]."model/noticias.class.php");
include($_SERVER["DOCUMENT_ROOT"]."model/usuarios.class.php");

if($url[$urlInicioConfig] == 'admin'){
	include($_SERVER["DOCUMENT_ROOT"]."admin/index.php");
}else{
	if($urlreservada[$url[$urlInicioConfig]]){
	  include($_SERVER["DOCUMENT_ROOT"]."controller/".$urlreservada[$url[$urlInicioConfig]]);
	} else {
	  include($_SERVER["DOCUMENT_ROOT"]."controller/index.php");
	}
}




?>