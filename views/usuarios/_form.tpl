<form action="" method="POST">
    {if $button == 'Guardar' || $button == 'Modificar'}
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="clave" class="form-control"
                placeholder="Password del usuario">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirmar Password</label>
            <input type="password" name="reclave" class="form-control" placeholder="Confirmar Password del usuario">
        </div>
    {/if}
    {if $button == 'Editar'}
        <div class="mb-3">
            <label for="activo" class="form-label">Estado</label>
            <select name="activo" class="form-control">
                <option value="{$usuario.activo}">
                    {if $usuario.activo == 1}
                        Activo
                    {else}
                        Inactivo
                    {/if}
                </option>

                <option value="">Seleccione...</option>
                <option value="1">Activar</option>
                <option value="2">Desactivar</option>
            </select>
        </div>
    {/if}
    {if $button == 'Login'}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Su email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="clave" class="form-control" placeholder="Su password">
        </div>
    {/if}
        <div class="mb-3">
            <input type="hidden" name="enviar" value="{$enviar}">
            <button type="submit" class="btn btn-outline-success">{$button}</button>
            {if isset($usuario)}
                {if $usuario.funcionario.rol.nombre == 'Administrador(a)' || $usuario.funcionario.rol.nombre == 'Supervisor(a)'}
                    <a href="{$_layoutParams.root}{$ruta}" class="btn btn-outline-primary">Volver</a>
                {else}
                    <a href="{$_layoutParams.root}" class="btn btn-outline-primary">Volver</a>
                {/if}
            {/if}
        </div>
</form>