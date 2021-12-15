<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
            <a href="{$_layoutParams.root}funcionarios" class="list-group-item list-group-item-action">Funcionarios</a>
            <a href="{$_layoutParams.root}especialidades" class="list-group-item    list-group-item-action">Especialidades</a>
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
                        <td>{$funcionario.rut}</td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td>{$funcionario.nombre}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{$funcionario.email}</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td>{$funcionario.rol.nombre}</td>
                    </tr>
                    <tr>
                        <th>Especialidad:</th>
                        <td>{$funcionario.especialidad.nombre}</td>
                    </tr>
                    {if isset($funcionario.usuario)}
                        <tr>
                            <th>Activo:</th>
                            <td>
                                {if $funcionario.usuario.activo == 1}
                                    Si
                                {else}
                                    No
                                {/if}
                                <a href="{$_layoutParams.root}usuarios/edit/{$funcionario.usuario.id}">Cambiar Estado</a>
                            </td>
                        </tr>
                    {else}
                        <tr>
                            <th colspan="2">
                                <span class="text-warning">No tiene una cuenta de usuario creada</span>
                            </th>
                        </tr>
                    {/if}
                    <tr>
                        <th>Creado:</th>
                        <td>{$funcionario.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td>{$funcionario.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}funcionarios/edit/{$funcionario.id}" class="btn btn-outline-success">Editar</a>
                    <a href="{$_layoutParams.root}funcionarios" class="btn btn-outline-primary">Volver</a>

                    {if isset($funcionario.usuario)}
                        <a href="{$_layoutParams.root}usuarios/editPassword/{$funcionario.usuario.id}" class="btn btn-outline-success">Cambiar Password</a>
                    {else}
                        <a href="{$_layoutParams.root}usuarios/add/{$funcionario.id}" class="btn btn-outline-success">Crear Cuenta de Usuario</a>
                    {/if}
                </p>
            </div>

        </div>
    </div>
</div>