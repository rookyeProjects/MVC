<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class articulo extends Eloquent {

	private $db;

	public function __construct(){
		//$this->db = new Base;
	}

	public function obtenerArticulos(){
		//$articulos = articulo::select('id','titulo')->where('id', 1)->get();
		$articulos = articulo::all();
		return  $articulos;
	}
}