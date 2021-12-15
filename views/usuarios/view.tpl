<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="{$_layoutParams.root}funcionarios"
                    class="list-group-item list-group-item-action">Funcionarios</a>
                <a href="{$_layoutParams.root}especialidades"
                    class="list-group-item    list-group-item-action">Especialidades</a>
                <a href="{$_layoutParams.root}roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="{$_layoutParams.root}funcionarios/add" class="list-group-item list-group-item-success">Agregar
                    Funcionario</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">
                {include file="../partials/_mensajes.tpl"}

                <table class="table table-hover table-responsive">
                    <tr>
                        <th>RUT:</th>
                        <td>{$usuario.funcionario.rut}</td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td>{$usuario.funcionario.nombre}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{$usuario.funcionario.email}</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td>{$usuario.funcionario.rol.nombre}</td>
                    </tr>
                    <tr>
                        <th>Especialidad:</th>
                        <td>{$usuario.funcionario.especialidad.nombre}</td>
                    </tr>

                    <tr>
                        <th>Activo:</th>
                        <td>
                            {if $usuario.activo == 1}
                                Si
                            {else}
                                No
                            {/if}

                        </td>
                    </tr>

                    <tr>
                        <th>Creado:</th>
                        <td>{$usuario.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td>{$usuario.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}" class="btn btn-outline-primary">Volver</a>

                    <a href="{$_layoutParams.root}usuarios/editPassword/{$usuario.id}"
                        class="btn btn-outline-success">Cambiar Password</a>
                </p>
            </div>
        </div>
    </div>
</div>