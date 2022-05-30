<?php

if(isset($_POST["login"])){
  $opLogin = $_POST["login"];
}

// LOGAR DO SISTEMA
if($opLogin == "sair"){
  	unset($_SESSION['logged']);
  	unset($_SESSION['id_admin']);
  	unset($_SESSION['id_revendedor']);
  	unset($_SESSION['usuario']);
  	unset($_SESSION['is_admin']);
	session_destroy();

  header("Location: ".$urlSite);
  exit();

}elseif($opLogin == "logar"){
	
	session_destroy();
	session_start();
	
	$email = $_POST["email"];
	// $senha = md5($_POST["senha"]);
	$senha = trim(strip_tags($_POST["senha"]));	
    // $senha = addslashes($senha);
	// $senha = mysqli_real_escape_string($conexao, $senha);

	
	$sql = "SELECT
				 a.*
			FROM
				 admin a
			WHERE a.email = '$email' AND a.password = '$senha'";
	
	echo $sql;exit;
	$result = mysqli_query($conexao, $sql); 
	$num_results = mysqli_num_rows($result);
	
	if($num_results == 0) {
		include($_SERVER["DOCUMENT_ROOT"]."/controller/login.php");
		exit();
	}
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	

	$_SESSION["logged"] = md5($row['id'].$row['username']);
	$_SESSION['id_admin'] = $row['id'];
	$_SESSION["usuario"] = $row["username"];
	$_SESSION["is_admin"] = $row["is_admin"];

	$opLogin = "logado";
	
	include($_SERVER["DOCUMENT_ROOT"]."/controller/index.php");
	exit();
}else{
	include($_SERVER["DOCUMENT_ROOT"]."/controller/login.php");
	exit();
}


?>