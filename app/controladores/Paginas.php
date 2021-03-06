<?php

class Paginas extends Controlador{

	private $carpeta = 'paginas';

	function __construct(){
		$this->articuloModelo = $this->modelo('articulo');
		//echo 'Controlador de paginas cargado';
	}

	public function index(){

		$articulos = $this->articuloModelo->obtenerArticulos();
		
		$datos = [
			'Titulo'    => 'Bienvenidos',
			'articulos' => $articulos
		];
		$this->vista($this->carpeta . '/inicio', $articulos);
	}

	/*public function articulo(){
		$this->vista($this->carpeta . '/articulo');
	}

	public function actualizar($objeto_metodo){
		echo $objeto_metodo;
	}*/
}