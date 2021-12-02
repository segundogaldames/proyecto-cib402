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

                {if isset($especialidades) && count($especialidades)}
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Especialidad</th>
                        </tr>
                        {foreach from=$especialidades item=especialidad}
                            <tr>
                                <td>
                                    <a href="{$_layoutParams.root}especialidades/view/{$especialidad.id}">{$especialidad.nombre}</a>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                {else}
                    <p class="text-info">No hay especialidades registradas</p>
                {/if}

            </div>

        </div>
    </div>
</div>