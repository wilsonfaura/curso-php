<form id="baja-contacto" name="baja-frm" action="php/eliminar-contacto.php" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Baja de Contacto</legend>
        <div>
            <label for="email">Email: </label>
            <select name="email_slc" class="cambio" id="email" required>
                <option value="">----</option>
                <?php include("select-email.php")?>
            </select>
        </div>
        <div>
            <input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="Eliminar" />
        </div>
        <?php include("php/mensajes.php"); ?>
    </fieldset>
</form>