<div class="col-md-12">
    <h1 class="text-center">{$title}</h1>
    <div class="row">
        <div class="col-md-2">
            <a href="{$_layoutParams.root}roles" class="btn btn-link">Roles</a>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-3">
                {include file="../partials/_mensajes.tpl"}
                {include file="../roles/_form.tpl"}
            </div>

        </div>
    </div>
</div>