<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="{$_layoutParams.root}funcionarios"
                    class="list-group-item list-group-item-action">Funcionarios</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">
                {include file="../partials/_mensajes.tpl"}

                <h4>Funcionario(a): {$usuario.funcionario.nombre}</h4>
                {include file="../usuarios/_form.tpl"}
            </div>

        </div>
    </div>
</div>