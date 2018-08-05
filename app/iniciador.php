<?php

	$ruta =  dirname(__FILE__) . "\librerias";

	//Cargamos librerias
	require_once 'librerias/vendor/autoload.php';
	
	require_once 'config/Configurar.php';
	try{
		
		if($carpeta = opendir($ruta)){
			while ($archivo = readdir($carpeta)){	
				if(!is_dir($archivo)){
					$extension = new SplFileInfo($archivo);
					if($extension->getExtension() == 'php'){
						require_once $ruta . "\\" . $archivo;
					}
				}
			}
		}
	}catch(Exception $e){
		
		echo $e->getMessage();
	}

	
	/*require_once 'librerias/Base.php';
	require_once 'librerias/Controlador.php';
	require_once 'librerias/Core.php';*/

	
