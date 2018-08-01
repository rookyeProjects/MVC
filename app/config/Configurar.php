<?php

//Ruta de la aplicacion
define ('RUTA_APP',dirname(dirname(__FILE__)));

//Ruta url Ejemplo http://localhost/render2web_mvc2/
define('RUTA_URL', 'http://localhost:8888/MVC');

DEFINE('NOMBRE_SITIO', 'CRUD MVC');



use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
//Indicamos en el siguiente array los datos de configuración de la BD
$capsule->addConnection([
 'driver' =>'mysql',
 'host' => 'localhost:8888',
 'database' => 'blog1',
 'username' => 'root',
 'password' => '',
 'charset' => 'utf8',
 'collation' => 'utf8_unicode_ci',
 'prefix' => '',
]);
 
//Y finalmente, iniciamos Eloquent
$capsule->bootEloquent();

	