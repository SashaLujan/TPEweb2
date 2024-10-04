{include 'header.tpl'}

<div>
   <h4 class="blockquote">Canciones</h4>
</div>
    <div class="container mt-5">
        <div class="bandas">
            {foreach $cancionesPorBanda item= canciones}
                <div class="card">
                    <div class="card-body">
                        <p class="card-title"> {strtoupper($canciones->nombre_cancion)} </p>
                    </div>
                </div>
            {/foreach}
        </div>
        <a class="btn btn-dark" href="listaBandas">volver</a>
    </div>

{include 'footer.tpl'}