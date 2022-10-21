<?php
session_start();
/*Evaluo que la sesion continue verificando una de las vriables 
creadas en control.php, cuando esta ya no coincida con su valor 
inicial se redirige al archivo de salir.php*/
if (!$_SESSION["autentificado"]) {
    header("location: salir.php");
}
?>