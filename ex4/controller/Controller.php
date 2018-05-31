<?php
class Controller {
	
    public function salvar() {
		
    	$enviar 	= array();
    	$validacao 	= array();
		
		$enviar['nome']  		= $_POST['nome'];
		$enviar['sobrenome']  	= $_POST['sobrenome'];
		$enviar['email']  		= $_POST['email'];
		$enviar['telefone']  	= $_POST['telefone'];
		$enviar['login']  		= $_POST['login'];
		$enviar['senha']  		= md5($_POST['senha']);

		//conferindo se login e email ja estão cadastrados e validando erros.
		$confereBD 	  = file_get_contents('registros.txt');
		$arquivoArray = unserialize($confereBD);

		if($arquivoArray){

			foreach ($arquivoArray as $value) {

				if($_POST['email'] == $value['email'] ){
					$validacao["ERROR"]['EMAIL'] = true;
				}
				if($_POST['login'] == $value['login'] ){
					$validacao["ERROR"]['LOGIN']= true ;
				} 	
			}
		}

		//->Se não houver erros istancia a model e chama o metodo.
		if(!isset($validacao["ERROR"]['EMAIL']) && !isset($validacao["ERROR"]['LOGIN'])) {
			$model 	 = new Model();
			$retorno = $model->salvarDados($enviar);
			if($retorno){
				$validacao["SUCCESS"] = true;
			}else{
				$validacao["ERROR"]['BANCO'] = true;
			}
		}
		
		//->retornando para view
		$view = new View();
		$view->form($validacao);
    }
}