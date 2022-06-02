<?php
class Usuarios {
  var $post = array();
  var $retorno = array();
  
  function __construct() {
  }
	
  function __destruct() {
  }
	
  function set($variavel, $valor){
	if(isset($valor)) $this->$variavel = $valor;
  }
	
  function get($variavel){
	return $this->$variavel;
  }	

 function listarTodosUsuarios() {	
     
 	 	$sql = "SELECT
				*
			FROM
				admin";

  

	$query = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

	while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$this->usuarios[$linha['id']] = $linha;
	}
	return $this->usuarios;
  }

  function alterarUsuario(){	

    $sql = "UPDATE admin SET ";

 	if($this->post['nomeUsuario']){
 		$sql .= " username = '".utf8_decode($this->post['nomeUsuario'])."', ";
 	}

 	if($this->post['emailUsuario']){
 		$sql .= " email = '".utf8_decode($this->post['emailUsuario'])."', ";
 	}
 	
 	if($this->post['passwordUsuario']){
 		$sql .= " password = '".$this->post['passwordUsuario']."', ";
 	}

 	$sql .= " ativo = 1 WHERE id = '".$this->post['id']."' ";
 	// echo $sql;exit;
 	$modificar = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));	

  return $this->id;
}

}
?>