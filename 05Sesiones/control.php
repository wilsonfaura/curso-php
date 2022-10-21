<?php
if ($_POST["usuario_txt"]=="Wilson" && $_POST["password_txt"]=="Faura") {
    //Inicio la sesion
    session_start();

    //Declaro mis variables de sesion
    $_SESSION["autentificado"]=true;
    $_SESSION["usuario"]=$_POST["usuario_txt"];

    header("location: archivo-protegido.php");
}else {
    header("location: index.php?error=si");
}
?>