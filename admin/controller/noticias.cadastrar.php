<?php

$categorias = new Categorias();
$categorias->Set("conexao",$conexao);
$categorias->Set("post",$_POST);
$todosCategorias = $categorias->listarTodasCategorias();


$noticias = new Noticias();
$noticias->Set("post",$_POST);
$noticias->Set("conexao",$conexao);

if(isset($url[2])){
	$noticias->Set("idnoticia",$url[2]);
	$retornaNoticia = $noticias->retornarNoticia();

	if($url[3] == 'excluir'){
		$excluirNoticia = $noticias->excluirNoticia();
		if($excluirNoticia){
			$_SESSION['alerta'] = "Noticia Excluida com Sucesso!";
    		header('Location: '.$urlSite.'/noticias-pesquisar/');
    		exit();
    	}
	}
}

if($_POST['opcForm'] == 'cadastrar'){
	
	$noticias->Set("idusuario",$_SESSION['id_admin']);
    $cadastro = $noticias->cadastrarNoticia();

    if($cadastro){
    	$_SESSION['alerta'] = "Noticia Adicionada com Sucesso!";
    	header('Location: '.$urlSite.'/noticias-cadastrar/'.$cadastro.'/editar');
    	exit();
    }
}

if($_POST['opcForm'] == 'modificar'){

	$noticias->Set("idnoticia",$url[2]);
	$modificar = $noticias->modificarNoticia();

	if($modificar){
		$_SESSION['alerta'] = "Noticia Modificada com Sucesso!";
		header('Location: '.$urlSite.'/noticias-cadastrar/'.$modificar.'/editar');
    	exit();
	}
}

include('views/'.'noticias.cadastrar.php');