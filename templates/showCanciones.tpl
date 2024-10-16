{if {$logueado} == true} 
    {include 'headerAdmin.tpl'}
{else}
    {include 'header.tpl'}
{/if}

<div>
   <h4 class="blockquote">Canciones</h4>
</div>

<div class="container mt-5">
    {if {$logueado} == true}
        <div class="mb-3">
            <a class="btn btn-dark" href="agregarCancion"><b>Agregar Canción</b></a>
        </div>
    {/if}
    <div class="canciones">
        {foreach $listaCanciones item= cancion}
            <div class="card">
                <div class="card-body">
                    <a href="mostrarCancion/{strtoupper($cancion->id_cancion)}" class="card-title"> {strtoupper($cancion->nombre_cancion)}</a>
                    {if {$logueado} == true}
                        <div class="mt-3">
                            <a class="btn btn-dark" href="editarCancion/{$cancion->id_cancion}"><b>Modificar</b></a>
                            <a class="btn btn-dark" href="eliminarCancion/{$cancion->id_cancion}"><b>Eliminar</b></a>
                        </div>
                    {/if}
                </div>
            </div>
           
        {/foreach}
    </div>
</div>
 
{include 'footer.tpl'}