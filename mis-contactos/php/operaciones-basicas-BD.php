<?php
$conexion = mysqli_connect("localhost", "root", "", "mis_contactos") or die("No se pudo conectar con el servidopr de BD");
echo "Conectado al servidor de BD MySQL<br/>";

$conexion->select_db("mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD Seleccionada: <b>mis_contactos<b/><br/>";
echo "<h1>Las 4 operaciones basicas a una BD</h1>";

echo "<h2>1) INSERCI&Oacute;N DE DATOS</h2>";
//INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta = "INSERT INTO contactos (email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES ('wilson.faura10@hotmail.com','Wilson Faura','M','1984-07-03','3214937857','Colombia','wilsonfaura.png')";

//$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "se han insertado los datos =) <br/>";

echo "<h2>2) ILIMINACI&Oacute;N DE DATOS</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'wilson&faura10@hotmail'";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "se han eliminado los datos =) <br/>";

echo "<h2>3) MODIFICACI&Oacute;N DE DATOS</h2>";
//UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'wilsonfaura10@hotmail.com', nombre = 'Ernesto' WHERE email = 'wilson.faura10@hotmail.com' ";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "se han modificado los datos =) <br/>";

echo "<h2>4) CONSULTA (busqueda) DE DATOS</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor
$consulta = "SELECT * FROM contactos";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae todos los registros de la tabla</h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."<br/>";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Ernesto Faura' ";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae los registros de la tabla con nombre igual a Ernesto Faura </h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."<br/>";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Ernesto Faura' AND imagen = 'wilson.faura.png' ";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae los registros de la tabla con nombre igual a Ernesto Faura e imagen igual a wilson.faura.png </h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."<br/>";
}

mysqli_close($conexion);
echo "<h4>Conexion cerrada</h4>";
?>