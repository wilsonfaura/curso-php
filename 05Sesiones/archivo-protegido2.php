<?php include("sesion.php"); ?>
Bienvenido: 
<?php echo $_SESSION["usuario"]; ?>
<br/><br/>
Estas en otra pagina segura con sesiones en PHP
<br/><br/>
<a href="archivo-protegido.php">ir a la primer pagina segura</a>
<br/><br/>
<a href="salir.php">Salir</a>