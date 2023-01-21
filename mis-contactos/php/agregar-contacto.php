<?php
//Asigno a variables de php los valores que vienen del formulario
$email = $_POST["email_txt"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];

//Dependiendo del sexo ponemos una imagen predeterminada
$imagen_generica = ($sexo=="M")?"amigo.png":"amiga.png";

//Verificamos que no exista previamente el email del usuario en la BD
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//Si $num_regs es igual a cero, insertamos los datos en la tabla, si no existe mandamos un mensaje que diga que el usuario ya existe
if($num_regs == 0){
    //inserto el registro a la base de datos
    //Se ejecuta la funcion para subir la imagen
    include("funciones.php");
    $tipo = $_FILES["foto_fls"]["type"];
    $archivo = $_FILES["foto_fls"]["tmp_name"];
    $se_subio_imagen = subir_imagen($tipo,$archivo,$email);

    //Si la foto en el formulario viene vacia, entonces le asigno el valor d el aimagen generica, si no entonces el nombre d ela foto que se subio.
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;
    $consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";
    $ejecutar_consulta = $conexion->query($consulta);

    if($ejecutar_consulta)
        $mensaje = "Se ha dado de alta el contacto con el email <b>$email</b> :)";
    else
        $mensaje = "No se pudo dar de alta a el contacto con el email <b>$email</b> :(";

}else{
    $mensaje = "no se pudo dar de alta al contacto con el email <b>$email</b> porque ya existe :/";
}

$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>