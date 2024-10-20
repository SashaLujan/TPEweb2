{if {$logueado} == true} 
    {include 'headerAdmin.tpl'}
{else}
    {include 'header.tpl'}
{/if}

<div>
   <h4 class="blockquote">Canciones</h4>
</div>
    <div class="container mt-5">
        <div class="bandas">
            {foreach $cancionesPorBanda item= canciones}
                <div class="card">
                    <div class="card-body">
                        <a href="mostrarCancion/{$canciones->id_cancion}" class="card-title"> {strtoupper($canciones->nombre_cancion)} </a>
                    </div>
                </div>
            {/foreach}
        </div>
        <a class="btn btn-dark" href="listaBandas">volver</a>
    </div>

{include 'footer.tpl'}