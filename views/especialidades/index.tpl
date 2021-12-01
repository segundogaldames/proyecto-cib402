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

                {if isset($roles) && count($roles)}
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Rol</th>
                        </tr>
                        {foreach from=$roles item=rol}
                            <tr>
                                <td>
                                    <a href="{$_layoutParams.root}roles/view/{$rol.id}">{$rol.nombre}</a>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                {else}
                    <p class="text-info">No hay roles registrados</p>
                {/if}

            </div>

        </div>
    </div>
</div>