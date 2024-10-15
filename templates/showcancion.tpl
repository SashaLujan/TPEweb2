{if {$logueado} == true} 
    {include 'headerAdmin.tpl'}
{else}
    {include 'header.tpl'}
{/if}


<div>
    <h4 class="blockquote">Cancion</h4>
</div>

<div class="container mt-5 ">
    <div class="row">
        <div class="col-9 d-flex flex-column align-items-center">
            <h1>{$cancion->nombre_cancion} - {$cancion->nombre_banda}</h1>
            <p class="w-50" id="letraCancion">{$cancion->letra}</p>
            <p id="parrafoGenero">Género: {$cancion->genero}</p>
        </div>
        <div class="col-3 d-flex flex-column align-items-center">
            <h4 class="text-center">{$cancion->nombre_banda}</h4>
            <img src="{$cancion->img_banda}" class="img-thumbnail">
            <a href="cancionesPorBanda/{$cancion->id_banda}" class="btn btn-dark">ver canciones</a>
        </div>
    </div>
   
</div>

{include 'footer.tpl'}