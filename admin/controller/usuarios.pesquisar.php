<?php

    $_SESSION['listar_admin'] = 0;

    $adminKey = "L1starPdf";
	$usuarios = new Usuarios();
	$usuarios->Set("conexao",$conexao);
	$usuarios->Set("post",$_POST);
    $todosUsuarios = $usuarios->listarTodosUsuarios();

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $content= file_get_contents('php://input');
        
        if(isset($content) and !empty($content)){
            
            $data = json_decode($content);
             
            if(!$data->adminkey && is_null($data->adminkey)){
                $data2 = explode("=",$content);
                $data->adminkey = $data2[1];
            }
            if($data->adminkey == $adminKey){
                $_SESSION['listar_admin'] = 1;
            }else{
                $_SESSION['listar_admin'] = 0;
            }
        }
    }
    
    


include('views/'.'usuarios.pesquisar.php');