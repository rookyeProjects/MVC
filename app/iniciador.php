<?php

	//Cargamos librerias
	require_once 'librerias/vendor/autoload.php';
	require_once 'config/Configurar.php';
	

	//require_once 'librerias/Base.php';
	//require_once 'librerias/Controlador.php';
	//require_once 'librerias/Core.php';

	//AutoLoad php

	spl_autoload_register(function($nombreClase){
		require_once 'librerias/' . $nombreClase . '.php';
		
	});