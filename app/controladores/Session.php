<?php

class Session extends Controlador{

    private $carpeta = 'session';

    function __construct(){

    }

    function inicio(){
    	
        $this->vista($this->carpeta . '/inicio');
    }
}