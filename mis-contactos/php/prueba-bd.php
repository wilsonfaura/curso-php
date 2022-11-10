<?php
//Pasos para conectarme a una base de datos MySQL con PHP
//1)Conectarme a la BD, mysql_connect necesita 3 datos:
	//1)Servidor de BD
	//2)Usuario de la BD
	//3)Password del usuario de la BD
$conexion = mysqli_connect("localhost","root","","mis_contactos") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL <br/>";


//2)Seleccionar base de datos
$conexion->select_db("mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD Seleccionada: 'mis_contactos'<br/>";

//3)Crear una consulta
$consulta = "SELECT * FROM pais";

//4)Ejecutar la consulta SQL
$ejecutar_consulta = mysqli_query($conexion, $consulta) or die("no se pudo ejecutar la consulta en la BD");
echo "se ejecuto la consulta SQL <br/>";

//5)Mostrar el resultado de la consulta SQL, dentro de un ciclo y en una variable voy a ingresar la función mysql_fetch_array
while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
	echo $registro["id_pais"]." - ".$registro["pais"]."<br/>";
}

//Cerrar la conexion a la BD
mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion al abase de datos");
echo "Conexion cerrada";

?>