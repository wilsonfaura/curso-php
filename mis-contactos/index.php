<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch ($op) {
	case 'alta':
		$contenido = "php/alta-contacto.php";
		$titulo = "Alta de Contactos";
		break;
	case 'baja':
		$contenido = "php/baja-contacto.php";
		$titulo = "Baja de Contactos";
		break;
	case 'cambios':
		$contenido = "php/cambios-contacto.php";
		$titulo = "Cambios a Contactos";
		break;
	case 'consultas':
		$contenido = "php/consultas-contacto.php";
		$titulo = "Consultas a Contactos";
		break;	
	
	default:
		$contenido = "php/home.php";
		$titulo = "Mis contactos v1";
		break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $titulo ?></title>
	<link rel="stylesheet" type="text/css" href="css/mis-contactos.css" />
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write("<script src='js/jquery-2.1.4.min.js'><\/script>");
	</script>
	<script src="js/mis-contactos.js" type="text/javascript"></script>
	<style  type="text/css"></style>
</head>
<body>
	<section id="contenido">
		<nav>
			<ul>
				<li><a class="cambio" href="index.php">Home</a></li>
				<li><a class="cambio" href="?op=alta">Alta de contacto</a></li>
				<li><a class="cambio" href="?op=baja">Baja de contacto</a></li>
				<li><a class="cambio" href="?op=cambios">Cambios de contacto</a></li>
				<li><a class="cambio" href="?op=consultas">Consultas de contacto</a></li>
			</ul>
		</nav>
		<section id="principal">
			<?php include($contenido)?>
		</section>
	</section>
</body>

