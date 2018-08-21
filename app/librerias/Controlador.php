<?php

//Clase controlador principal
//Se encarga de poder cargar los modelos y las vistas

abstract class Controlador{
		
	//Cargar MOdelo
	protected function modelo($modelo){
		//carga
		require_once '../app/modelos/' . $modelo . '.php';
		//retornamos el modelo
		return new $modelo;

	}

	//Cargar Vista
	protected function vista($vista, $datos = false){

		//Chequear si la vista existe
		if(file_exists('../app/vistas/' . $vista . '.php')){
			require_once '../app/vistas/' . $vista . '.php';
		}else{
			//Si no existe
			die("La vista no existe");
		}
	}

	abstract function helper_data();




}