<form id="consulta-contacto" action="" name="consulta_form" method="get">
    <fieldset>
        <legend>Consulta de Contactos</legend>
        <label for="consulta-lista">Tipo de Consulta: </label>
        <select name="consulta_slc" id="consulta-lista" required>
            <option value="">- - - - </option>
            <option value="todos"<?php if($_GET["consulta_slc"]=="todos"){echo " Selected"; } ?>>Todos</option>
            <option value="email"<?php if($_GET["consulta_slc"]=="email"){echo " Selected"; } ?>>Por email</option>
            <option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){echo " Selected"; } ?>>por inicial</option>
            <option value="sexo"<?php if($_GET["consulta_slc"]=="sexo"){echo " Selected"; } ?>>Por sexo</option>
            <option value="pais"<?php if($_GET["consulta_slc"]=="pais"){echo " Selected"; } ?>>Por pais</option>
            <option value="buscador"<?php if($_GET["consulta_slc"]=="buscador"){echo " Selected"; } ?>>Tipo buscador</option>
        </select>
        <?php
            switch ($_GET["consulta_slc"]) {
                case "todos":
                    include("php/consulta-todo.php");
                    break;
                case "email":
                    include("php/consulta-email.php");
                    break;
                case "inicial":
                    include("php/consulta-inicial.php");
                     break;
                case "sexo":
                    include("php/consulta-sexo.php");
                    break;
                case "pais":
                    include("php/consulta-pais.php");
                    break;
                    case "buscador":
                        include("php/consulta-buscador.php");
                        break;
            }
        ?>
    </fieldset>
</form>
<script>
    window.onload = function(){
        var lista = document.getElementById("consulta-lista");
        lista.onchange = function(){
            window.location="index.php?op=consultas&consulta_slc="+lista.value;
        };
    }
</script>