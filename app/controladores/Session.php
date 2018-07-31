<?php

class Session extends Controlador{

    private $carpeta = 'session';

    function __construct(){

    }

    function index(){
    	
        $this->vista($this->carpeta . '/inicio');
    }
}