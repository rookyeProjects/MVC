
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<h1><?php 
				foreach($datos as $key){
					echo $key->titulo . "<br>";
				}
?></h1>
<ul>
	<?php /*foreach ($datos['articulos'] as $key => $user) {
		echo $user;
	} */?>
</ul>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>