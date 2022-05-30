<?php


// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

error_reporting(0);
date_default_timezone_set('America/Fortaleza');

// CONFIGURAÇÃO DO SISTEMA - VARIAVEIS
      // CONFIGURAÇÕA DO SITE
      $tituloSite = "Sua Noticia";
      $criador = "Marcus Jordhan";
      $_SERVER["DOCUMENT_ROOT"] = "D:/laragon/www/TYPEJUGGLING/admin/";
      $urlArquivos = "http://typejuggling.test/admin/files";
      $urlSite = "http://typejuggling.test/admin";
      $footer = "© Marcus Jordhan 2020 - Todos os direitos reservados.";
      $urlInicioConfig = 1;
      $assets = "http://typejuggling.test/admin/assets/";

      // CONECTA COM BANCO
      $servidor = "localhost";
      $user = "root";
      $senha = "4123612";
      $db = "typejuggling";

      $conexao = mysqli_connect($servidor,$user,$senha) or die(include("ops.php"));

      $sql = "SET NAMES 'utf8'";
      mysqli_query($conexao, $sql);
      $sql = 'SET character_set_connection=utf8';
      mysqli_query($conexao, $sql);
      $sql ='SET character_set_client=utf8';
      mysqli_query($conexao, $sql);
      $sql ='SET character_set_results=utf8';
      mysqli_query($conexao, $sql);
      $banco = mysqli_select_db($conexao,$db);


$situacao = array(
            0 => "Inativo",
            1 => "Ativo"
            );

?>
