<form action="" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" value="{$especialidad.nombre|default:""}" class="form-control"
            placeholder="Nombre de la especialidad">
    </div>
    <div class="mb-3">
        <input type="hidden" name="enviar" value="{$enviar}">
        <button type="submit" class="btn btn-outline-success">{$button}</button>
        <a href="{$_layoutParams.root}{$ruta}" class="btn btn-outline-primary">Volver</a>
    </div>
</form>