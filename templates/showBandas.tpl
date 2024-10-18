
{if {$logueado} == true} 
    {include 'headerAdmin.tpl'}
{else}
    {include 'header.tpl'}
{/if}
    

<div>
   <h4 class="blockquote">Bandas</h4>
</div>

<div class="container mt-5">
    <div class="bandas">
        {if {$logueado} == true}
        <div class="mb-3">
            <a class="btn btn-dark" href="agregarBanda"><b>Agregar Banda</b></a>
        </div>
        {/if}
        {foreach $listaBandas item= bandas}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {strtoupper($bandas->nombre_banda)} </h5>
                    <a href="cancionesPorBanda/{$bandas->id_banda}" class="btn btn-dark">ver mas</a>  
                
                    {if {$logueado} == true}
                        <a class="btn btn-dark" href="editarBanda/{$bandas->id_banda}"><b>Modificar</b></a>
                        <a class="btn btn-dark" href="eliminarBanda/{$bandas->id_banda}"><b>Eliminar</b></a>
                    {/if}
                </div>
                
            </div>
        {/foreach}
    </div>
</div>
 
{include 'footer.tpl'}