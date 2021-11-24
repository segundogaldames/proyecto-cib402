<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2">
            <a href="{$_layoutParams.root}roles/add" class="btn btn-link">Agregar Rol</a>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-3">

                {include file="../partials/_mensajes.tpl"}

                {if isset($roles) && count($roles)}
                    <table class="table table-hover">
                        <tr>
                            <th>Rol</th>
                        </tr>
                        {foreach from=$roles item=rol}
                            <tr>
                                <td>{$rol.nombre}</td>
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