<?php

class Session extends Controlador{

    private $carpeta = 'session';

    function __construct(){

    }

    function inicio(){
    	
        $this->vista($this->carpeta . '/inicio');
    }

    function verificarUsuario(){
        $datos = array();
        $datos = $this->handler();
    }

    function helper_data(){
        $user_data = array();
        if($_POST) {
            if(array_key_exists('email', $_POST)) {
            $user_data['email'] = $_POST['email'];
            }
            if(array_key_exists('password', $_POST)) {
            $user_data['password'] = $_POST['password'];
            }
            if(array_key_exists('recordar', $_POST)) {
            $user_data['recordar'] = $_POST['recordar'];
            }
        }
        return $user_data;
    }


	/*
function helper_user_data() {
$user_data = array();
if($_POST) {
if(array_key_exists('nombre', $_POST)) {
$user_data['nombre'] = $_POST['nombre'];
}
if(array_key_exists('apellido', $_POST)) {
$user_data['apellido'] = $_POST['apellido'];
}
if(array_key_exists('email', $_POST)) {
$user_data['email'] = $_POST['email'];
}
if(array_key_exists('clave', $_POST)) {
$user_data['clave'] = $_POST['clave'];
}
} else if($_GET) {
if(array_key_exists('email', $_GET)) {
$user_data = $_GET['email'];
}
64
POO y MVC en PHP – Eugenia Bahit
}
return $user_data;
}
handler();
?>
	*/