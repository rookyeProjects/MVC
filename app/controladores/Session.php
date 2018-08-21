<?php

class Session extends Controlador{

    private $carpeta = 'session';

    function __construct(){
        $this->articuloModelo = $this->modelo('Usuarios');
    }

    function inicio(){
        $datos_session = array();
    	$datos_session = $this->recordarDatos();
        $this->vista($this->carpeta . '/inicio', $datos_session);
    }

    function verificarUsuario(){
        $datos = array();
        $datos = $this->helper_data();
        var_dump($datos);
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

    private function validarCorreo($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return true;
        }else{
            return false;
        }
    }
    
    private function recordarDatos() {
        if(isset($_COOKIE["email"], $_COOKIE["password"])) {
            if(!empty($_COOKIE["email"]) && !empty($_COOKIE["password"])) {
                return $_COOKIE;
            }else{
                return false;
            }
        }
    }
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