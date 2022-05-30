<?php
class Categorias {
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

 function listarTodasCategorias() {	
 	 	$sql = "SELECT
				*
			FROM
				categorias
			WHERE ativo = '1' ";

			if($this->post['nomeCategoria']){
				$sql .= " AND nome LIKE '%".$this->post['nomeCategoria']."%'";
			}

	$query = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

	while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$this->categorias[$linha['id_categoria']] = $linha;
	}
	return $this->categorias;
  }

  function retornarCategoria(){
  	$sql = "SELECT * FROM categorias
  			WHERE id_categoria = '".$this->idcategoria."' AND ativo = '1'";

  	$query = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));
  	$linha = mysqli_fetch_array($query, MYSQLI_ASSOC);

  	return $linha;
  }


  function cadastrarCategoria(){	

  		$sql = "INSERT INTO categorias
  				(nome, id_usuario, ativo, data_cad)
  				VALUES
  				(
  					'".utf8_decode($this->post['nomeCategoria'])."',
  					'".$this->idusuario."',
  					'1',
  					NOW()
  				)";
  				
  		$cadastrar = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));
  		$idCategoria = mysqli_insert_id($this->conexao);	

  		return $idCategoria;
  }

  function modificarCategoria(){

 	$sql = "UPDATE categorias SET ";

 	if($this->post['nomeCategoria']){
 		$sql .= " nome = '".utf8_decode($this->post['nomeCategoria'])."', ";
 	}

 	$sql .= " ativo = '1' WHERE id_categoria = '".$this->idcategoria."'";
 	
 	$modificar = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

	 return $this->idcategoria;
  }

  function excluirCategoria(){
  	
  	$sql = "UPDATE categorias SET ativo = '0' WHERE id_categoria = '".$this->idcategoria."'";
  	$excluir = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

  	return $this->idcategoria;
  }

  function totalCategorias(){

  	$sql = "SELECT COUNT(*) as total_categorias FROM categorias WHERE ATIVO = '1'";

  	$query = mysqli_query($this->conexao,$sql) or die(include("erro_mysql.php"));
  	$resultado = mysqli_fetch_assoc($query);

  	return $resultado;
  }
  
	

}
?>