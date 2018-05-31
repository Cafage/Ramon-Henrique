<?php
class Model {
  
    public function salvarDados($enviar) {

    	//buscando as informações.
    	//mergeando as infomações existentes com as novas
		$existente			= file_get_contents('registros.txt');
		$arquivoArray 		= unserialize($existente);
		
		if($arquivoArray){
			$linha 	 = count($arquivoArray);
			$arquivoArray[$linha] = $enviar;
		}else{
			$arquivoArray[] = $enviar;
		}
		
		$serialized = serialize($arquivoArray);
		file_put_contents('registros.txt', $serialized);

		return true;
    }
}