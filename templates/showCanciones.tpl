{include 'header.tpl'}

<div>
   <h4 class="blockquote">Canciones</h4>
</div>

<div class="container mt-5">
    <div class="canciones">
        {foreach $listaCanciones item= cancion}
            <div class="card">
                <div class="card-body">
                    <a href="mostrarCancion/{strtoupper($cancion->id_cancion)}" class="card-title"> {strtoupper($cancion->nombre_cancion)}</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>
 
{include 'footer.tpl'}