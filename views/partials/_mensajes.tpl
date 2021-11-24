{if isset($_mensaje)}
    <div style="margin-top: 20px;"></div>
    <p class="alert alert-success">{$_mensaje}</p>
{/if}

{if isset($_error)}
     <div style="margin-top: 20px;"></div>
     <p class="alert alert-danger">{$_error}</p>
{/if}