<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="{$_layoutParams.root}roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="{$_layoutParams.root}roles/add" class="list-group-item list-group-item-success">Agregar Rol</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">

                {include file="../partials/_mensajes.tpl"}

                <table class="table table-hover table-responsive">
                    <tr>
                        <th>Rol:</th>
                        <td>{$rol.nombre}</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td>{$rol.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td>{$rol.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}roles/edit/{$rol.id}" class="btn btn-outline-success">Editar</a>
                    <a href="{$_layoutParams.root}roles" class="btn btn-outline-primary">Volver</a>
                </p>
            </div>

        </div>
    </div>
</div>