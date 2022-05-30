<?php
$categorias = new Categorias();
$categorias->Set("post",$_POST);
$categorias->Set("conexao",$conexao);

if(isset($url[2])){
	$categorias->Set("idcategoria",$url[2]);
	$retornaCategoria = $categorias->retornarCategoria();

	if($url[3] == 'excluir'){
		$excluirCategoria = $produtos->excluirCategoria();
		if($excluirCategoria){
			$_SESSION['alerta'] = "Categoria Excluida com Sucesso!";
    		header('Location: '.$urlSite.'/categorias-pesquisar/');
    		exit();
    	}
	}
}

if($_POST['opcForm'] == 'cadastrar'){
	$categorias->Set("idusuario",$_SESSION['id_admin']);
    $cadastro = $categorias->cadastrarCategoria();

    if($cadastro){
    	$_SESSION['alerta'] = "Categoria Adicionada com Sucesso!";
    	header('Location: '.$urlSite.'/categorias-cadastrar/'.$cadastro.'/editar');
    	exit();
    }
}

if($_POST['opcForm'] == 'modificar'){
	$categorias->Set("idcategoria",$url[2]);
	$modificar = $categorias->modificarCategoria();

	if($modificar){
		$_SESSION['alerta'] = "Categoria Alterada com Sucesso!";
		header('Location: '.$urlSite.'/categorias-cadastrar/'.$modificar.'/editar');
    	exit();
	}
}

include('views/'.'categorias.cadastrar.php');