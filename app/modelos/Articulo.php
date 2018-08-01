<?php

class Articulo extends Illuminate\Database\Eloquent\Model{

	private $db;

	public function __construct(){
		//$this->db = new Base;
	}

	public function obtenerArticulos(){
		$articulos = DB::table('articulos')->select('id', 'titulo')->get();
		//$articulos = blog1::all();
		
		return  $articulos;
	}
}