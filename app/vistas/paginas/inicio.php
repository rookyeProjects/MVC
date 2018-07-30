
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<!--h1><?php echo $datos['Titulo']; ?></h1>
<ul>
	<?php foreach($datos['articulos'] as $articulo) : ?>
		<li><?php echo $articulo->titulo; ?></li>
	<?php endforeach; ?>
</ul-->
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>