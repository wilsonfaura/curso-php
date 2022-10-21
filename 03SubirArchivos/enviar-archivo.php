<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentSubir Archivos al servidor con PHP</title>
</head>
<body>
    <form name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
        <input type="file" name="archivo_fls" />
        <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>
</body>
</html>