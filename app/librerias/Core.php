<?php

	/*
	Mapear la url ingresada en el navegador
	1- Controlador
	2- Metodo
	3- Parámetro
	Ejemplo: /articulos/actualizar/4
	*/

	class Core{
		protected $controladorActual = 'Session';
		protected $metodoActual = 'index';
		protected $parametros = [];

		//Constructor
		public function __construct(){
			$url = $this->getUrl();
			
			if(file_exists('../app/controladores/'. ucwords($url[0]) . '.php')){
				//Si existe se setea un controlador por defecto
				$this->controladorActual = ucwords($url[0]);

				//unset indice
				unset($url[0]);

				//Requerir controlador
				require_once '../app/controladores/' . $this->controladorActual . '.php';
				$this->controladorActual = new $this->controladorActual;

			}else{

				//Requerir controlador
				require_once '../app/controladores/' . $this->controladorActual . '.php';
				$this->controladorActual = new $this->controladorActual;
			}

			//chequear la segunda mitad de la url que seria el metodo
			if(isset($url[1])){
				if(method_exists($this->controladorActual, $url[1])){
					$this->metodoActual = $url[1];
					unset($url[1]);
				}
			}
			//obtener posibles parametros
			$this->parametros = $url ? array_values($url) : [];

			//llamar callback con parametros array
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
		}

		public function getUrl(){
			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}