<?php

    $_SESSION['listar_admin'] = 0;

    $adminKey = 202201020304;
	$usuarios = new Usuarios();
	$usuarios->Set("conexao",$conexao);
	$usuarios->Set("post",$_POST);
    $todosUsuarios = $usuarios->listarTodosUsuarios();
    
    
    if(isset($_REQUEST['adminkey'])) {
        $key = intval($_POST['adminkey']);
        if ($key == $adminKey) {
            $_SESSION['listar_admin'] = 1;
        }else{
            $_SESSION['listar_admin'] = 0;
        }
    }
    
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $content= file_get_contents('php://input');
        
    //     if(isset($content) and !empty($content)){
            
    //         $data = json_decode($content);

    //         if(!$data->adminkey){
    //             $data2 = explode("=",$content);
    //             $data->adminkey = $data2[1];
    //         }

    //         if($data->adminkey == $adminKey){
    //             $_SESSION['listar_admin'] = 1;
    //         }else{
    //             $_SESSION['listar_admin'] = 0;
    //         }
    //     }
    // }
    
    


include('views/'.'usuarios.pesquisar.php');