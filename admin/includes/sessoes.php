<?php
if(isset($_POST["login"])){
  $opLogin = $_POST["login"];
}

// LOGAR DO SISTEMA
if($opLogin == "sair"){
  	unset($_SESSION['logged']);
  	unset($_SESSION['id_admin']);
  	unset($_SESSION['usuario']);
  	unset($_SESSION['is_admin']);
	session_destroy();

  header("Location: ".$urlSite);
  exit();
}

	$sql = "SELECT
				 a.*
			FROM
				 admin a
			WHERE a.id = '".$_SESSION['id_admin']."'";
		// echo $sql;exit;
	$result = mysqli_query($conexao, $sql); 
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$_SESSION["logged"] = md5($row['id'].$row['username']);
	$_SESSION['id_admin'] = $row['id'];
	$_SESSION["usuario"] = $row["username"];
	$_SESSION["is_admin"] = $row["is_admin"];



?>