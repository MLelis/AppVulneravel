<?php  
 ini_set('memory_limit', '100M'); 
// MODELO DE USO: inc_thumb.php?&arquivo=imagem.jpg&altura=300&largura=500


include('m2brimagem.class.php');
$arquivo    = $_GET['arquivo'];  	
$largura    = $_GET['largura'];  
$altura     = $_GET['altura'];  
if(isset($_GET['qualidade']))
$qualidade = $_GET['qualidade'];
else
$qualidade = 95;

$oImg = new m2brimagem($arquivo);  
$valida = $oImg->valida(); 
if ($valida == 'OK') {  
    

if(isset($_GET["c"])){
			  $oImg->redimensiona($largura,$altura,'crop'); 
                           $oImg->legenda('teste Legenda xxxxxxxxxxx','10','530','50',$rgb,true,'Aller_Bd.ttf');
			  $oImg->grava(NULL,100);

}else{ 
	$oImg->redimensiona($largura,$altura,'crop'); 
      
	if(!$qualidade) {
	$oImg->grava(NULL,100);  
	}else{
	$oImg->grava(NULL,$qualidade);  
	}
}
	
	 
	exit;
	
} else {    
	die($valida);  
}  
?>  