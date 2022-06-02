<?php


$usuario = new Usuarios();
$usuario->Set("post",$_POST);
$usuario->Set("conexao",$conexao);

if($_POST['opcForm']){
    $alterar = $usuario->alterarUsuario();
}

include('views/'.'usuarios.editar.php');