<?php
//->index do sistema  
include '../controller/Controller.php';
include '../view/View.php';
include '../model/Model.php';

if(isset($_GET['acao']) && $_GET['acao'] == 'salvar'){
	$controller = new Controller();
	$controller->salvar();
}else{
	
	//->descomente para ver o array no arquivo .txt
	/*$confereBD 	  = file_get_contents('registros.txt');
	$arquivoArray = unserialize($confereBD);
 	exit(var_dump($arquivoArray));*/
	
	$view = new View();
	$view->form(); 
}