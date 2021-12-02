<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="{$_layoutParams.root}funcionarios" class="list-group-item list-group-item-action">Funcionarios</a>
                <a href="{$_layoutParams.root}especialidades" class="list-group-item    list-group-item-action">Especialidades</a>
                <a href="{$_layoutParams.root}roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="{$_layoutParams.root}funcionarios/add" class="list-group-item list-group-item-success">Agregar Funcionario</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-10 offset-md-1">

                {include file="../partials/_mensajes.tpl"}

                {if isset($funcionarios) && count($funcionarios)}
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Rol</th>
                        </tr>
                        {foreach from=$funcionarios item=funcionario}
                            <tr>
                                <td>
                                    <a href="{$_layoutParams.root}funcionarios/view/{$funcionario.id}">{$funcionario.nombre}</a>
                                </td>
                                <td>{$funcionario.especialidad.nombre}</td>
                                <td>{$funcionario.rol.nombre}</td>
                            </tr>
                        {/foreach}
                    </table>
                {else}
                    <p class="text-info">No hay funcionarios registrados</p>
                {/if}

            </div>

        </div>
    </div>
</div>