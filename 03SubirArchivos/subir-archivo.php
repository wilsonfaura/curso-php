<?php
    foreach ($_FILES["archivo_fls"] as $clave => $valor) {
        echo "propiedad: $clave --- Valor: $valor<br/>";
    }
    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_fls"]["name"];

    if ($_FILES["archivo_fls"]["type"]=="text/plain") {
        move_uploaded_file($archivo,$destino);
        echo "Archivo subido :)";
    }else {
        echo "Solo se admiyten archivos de texto plano<br/><a href=\"enviar-archivo.php\">REGRESAR</a>";
    }


?>