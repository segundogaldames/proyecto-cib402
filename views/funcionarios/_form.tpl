<form action="" method="POST">
    <div class="mb-3">
        <label for="rut" class="form-label">RUT</label>
        <input type="text" name="rut" value="{$funcionario.rut|default:""}" class="form-control" placeholder="RUT del funcionario (sin puntos y con guión)">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" value="{$funcionario.nombre|default:""}" class="form-control"
            placeholder="Nombre del funcionario">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" value="{$funcionario.email|default:""}" class="form-control"
            placeholder="Email del funcionario">
    </div>
    <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select name="rol" class="form-control">
            {if $button == 'Editar'}
                <option value="{$funcionario.rol_id}">{$funcionario.rol.nombre}</option>
            {/if}

            <option value="">Seleccione...</option>

            {foreach from=$roles item=rol}
                <option value="{$rol.id}">{$rol.nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <select name="especialidad" class="form-control">
            {if $button == 'Editar'}
                <option value="{$funcionario.especialidad_id}">{$funcionario.especialidad.nombre}</option>
            {/if}

            <option value="">Seleccione...</option>

            {foreach from=$especialidades item=especialidad}
                <option value="{$especialidad.id}">{$especialidad.nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="mb-3">
        <input type="hidden" name="enviar" value="{$enviar}">
        <button type="submit" class="btn btn-outline-success">{$button}</button>
        <a href="{$_layoutParams.root}{$ruta}" class="btn btn-outline-primary">Volver</a>
    </div>
</form>