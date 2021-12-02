<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="{$_layoutParams.root}especialidades" class="list-group-item list-group-item-action">Especialidades</a>
                <a href="{$_layoutParams.root}especialidades/add" class="list-group-item list-group-item-success">Agregar Especialidad</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">

                {include file="../partials/_mensajes.tpl"}

                <table class="table table-hover table-responsive">
                    <tr>
                        <th>Especialidad:</th>
                        <td>{$especialidad.nombre}</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td>{$especialidad.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td>{$especialidad.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                    </tr>
                </table>
                <p>
                    <a href="{$_layoutParams.root}especialidades/edit/{$especialidad.id}" class="btn btn-outline-success">Editar</a>
                    <a href="{$_layoutParams.root}especialidades" class="btn btn-outline-primary">Volver</a>
                </p>
            </div>

        </div>
    </div>
</div>