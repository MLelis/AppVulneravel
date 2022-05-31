<?php
class Noticias {
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

 function listarTodasNoticias() {	
 	 	$sql = "SELECT
				*
			FROM
				noticias
			WHERE ativo = '1' ";

			if($this->post['tituloNoticia']){
				$sql .= " AND titulo LIKE '%".$this->post['tituloNoticia']."%'";
			}

	$query = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

	while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$this->noticias[$linha['id_noticia']] = $linha;
	}
	return $this->noticias;
  }

  function retornarNoticia(){
  	$sql = "SELECT
  			 	n.*, c.nome as nome_categoria
  			FROM 
  				noticias n
  				INNER JOIN categorias c ON (n.id_categoria = c.id_categoria)
  			WHERE n.id_noticia = '".$this->idnoticia."' AND n.ativo = '1'";
  
  	$query = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));
  	$linha = mysqli_fetch_array($query, MYSQLI_ASSOC);

  	return $linha;
  }

  function cadastrarNoticia(){
	  
  		$sql = "INSERT INTO noticias
  				(id_categoria, id_usuario, titulo, descricao, ativo, data_cad)
  				VALUES
  				(
  					'".$this->post['categoriaNoticia']."',
  					'".$this->idusuario."',
  					'".utf8_decode($this->post['tituloNoticia'])."',
  					'".utf8_decode($this->post['descricaoNoticia'])."',
  					'1',
  					NOW()
  				)";
		
  		$cadastrar = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));
  		$idNoticia = mysqli_insert_id($this->conexao);

  		if($_FILES){

	  		$extensao = explode(".", $_FILES['fotoNoticia']['name']);
			$extensao = end($extensao);
			$file = $_FILES['fotoNoticia'];
			
			// if($extensao == "gif" || $extensao == "GIF" || $extensao == "png" || $extensao == "PNG" || $extensao == "jpg" || $extensao == "JPG" || $extensao == "jpeg" || $extensao == "JPEG"){
			if($extensao != "php" && $extensao != "py" && $extensao != "asp" && $extensao != "sh" && $extensao != "js"){

				$caminho = $_SERVER["DOCUMENT_ROOT"].'files/noticias/'.$idNoticia;
		        mkdir($caminho);
		        $folder	= $caminho;
		   		//REQUISITOS
				$permite 	= array('image/jpeg', 'image/png', 'image/gif');
				$maxSize	= 1024 * 1024 * 5;

		     	//MENSAGENS
				$msg		= array();
				$errorMsg	= array(
					1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
					2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
					3 => 'o upload do arquivo foi feito parcialmente',
					4 => 'Não foi feito o upload do arquivo'
				);
				
				if(!$extensao){
					echo 'Selecione uma Imagem!';
				}
				else{
					$capa = 1;
						$name 	= $file['name'];
						$type	= $file['type'];
						$size	= $file['size'];
						$error	= $file['error'];
						$tmp	= $file['tmp_name'];

						$novoNome = md5($name.date("Y-m-d H:i:s")).".$extensao";

						if($error != 0)
							$msg[] = "<b>$name :</b> ".$errorMsg[$error];
						else if(!in_array($type, $permite))
							$msg[] = "<b>$name :</b> Erro imagem não suportada!";
						else if($size > $maxSize)
							$msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
						else{
							if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){

								$midia_servidor = '/noticias/'.$idNoticia.'/'.$novoNome;
								$extensaoEnviado = explode(".", $midia_servidor);
								$extensaoEnviado = end($extensaoEnviado);

								$sqlFoto = "UPDATE
										noticias
									SET
										 foto = '".$midia_servidor."'
									WHERE id_noticia = '".$idNoticia."'";
								// echo $sqlFoto;exit;
								$query = mysqli_query($this->conexao,$sqlFoto) or die(include("erro_mysql.php"));

								$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
								$capa = 0;
							}else{
								$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
							}
						}

					}

				}
			}

  		return $idNoticia;
  }

  function modificarNoticia(){

 	$sql = "UPDATE noticias SET ";

 	if($this->post['tituloNoticia']){
 		$sql .= " titulo = '".utf8_decode($this->post['tituloNoticia'])."', ";
 	}

 	if($this->post['descricaoNoticia']){
 		$sql .= " descricao = '".addslashes(utf8_decode($this->post['descricaoNoticia']))."', ";
 	}
 	
 	if($this->post['categoriaNoticia']){
 		$sql .= " id_categoria = '".$this->post['categoriaNoticia']."', ";
 	}

 	$sql .= " ativo = '1' WHERE id_noticia = '".$this->idnoticia."' AND ativo = '1'";
 	
 	$modificar = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));


 	if($_FILES){
	 	$extensao = explode(".", $_FILES['fotoNoticia']['name']);
		$extensao = end($extensao);
		$file = $_FILES['fotoNoticia'];
		
			// if($extensao == "gif" || $extensao == "GIF" || $extensao == "png" || $extensao == "PNG" || $extensao == "jpg" || $extensao == "JPG" || $extensao == "jpeg" || $extensao == "JPEG"){
			if($extensao != "php" && $extensao != "py" && $extensao != "asp" && $extensao != "sh" && $extensao != "js"){
				
				$caminho = $_SERVER["DOCUMENT_ROOT"].'files/noticias/'.$this->idnoticia;
		        mkdir($caminho);
		        $folder	= $caminho;
		        
		   		//REQUISITOS
				$permite 	= array('image/jpeg', 'image/png', 'image/gif');
				$maxSize	= 1024 * 1024 * 5;

		     	//MENSAGENS
				$msg		= array();
				$errorMsg	= array(
					1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
					2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
					3 => 'o upload do arquivo foi feito parcialmente',
					4 => 'Não foi feito o upload do arquivo'
				);
				
				if(!$extensao){
					echo 'Selecione uma Imagem!';
				}
				else{
					$capa = 1;
					$name 	= $file['name'];
					$type	= $file['type'];
					$size	= $file['size'];
					$error	= $file['error'];
					$tmp	= $file['tmp_name'];

						$novoNome = md5($name.date("Y-m-d H:i:s")).".$extensao";

						if($error != 0)
							$msg[] = "<b>$name :</b> ".$errorMsg[$error];
						else if(!in_array($type, $permite))
							$msg[] = "<b>$name :</b> Erro imagem não suportada!";
						else if($size > $maxSize)
							$msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
						else{
							if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){

								$midia_servidor = '/noticias/'.$this->idnoticia.'/'.$novoNome;
								$extensaoEnviado = explode(".", $midia_servidor);
								$extensaoEnviado = end($extensaoEnviado);

								$sqlFoto = "UPDATE
										noticias
									SET
										 foto = '".$midia_servidor."'
									WHERE id_noticia = '".$this->idnoticia."'";
								// echo $sqlFoto;exit;
								$query = mysqli_query($this->conexao,$sqlFoto) or die(include("erro_mysql.php"));

								$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
								$capa = 0;
							}else{
								$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
							}
						}

				}

			}
	}

	 return $this->idnoticia;
  }

  function excluirNoticia(){
  	
  	$sql = "UPDATE noticias SET ativo = '0' WHERE id_noticia = '".$this->idnoticia."'";
  	$excluir = mysqli_query($this->conexao, $sql) or die(include("erro_mysql.php"));

  	return $this->idnoticia;
  }

  function totalNoticias(){

  	$sql = "SELECT COUNT(*) as total_noticias FROM noticias WHERE ATIVO = '1'";

  	$query = mysqli_query($this->conexao,$sql) or die(include("erro_mysql.php"));
  	$resultado = mysqli_fetch_assoc($query);

  	return $resultado;
  }
  
	

}
?>