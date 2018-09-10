<?php

class Session extends Controlador{

    private $carpeta = 'session';

    function __construct(){
        //$this->articuloModelo = $this->modelo('Usuarios');
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

    public function viewNuevo(){
        $this->vista($this->carpeta . '/nuevo', false);
    }

    public function altaUsuario(){
        if(isset($_POST)){
            var_dump("usuario_nuevo");
        }
    }
}
