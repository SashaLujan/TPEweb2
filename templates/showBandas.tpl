{include 'header.tpl'}

<div>
   <h4 class="blockquote">Bandas</h4>
</div>

<div class="container mt-5">
    <div class="bandas">
        {foreach $listaBandas item= bandas}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {strtoupper($bandas->nombre_banda)} </h5>
                    <a href="cancionesPorBanda/{$bandas->id_banda}" class="btn btn-dark">ver mas</a>  
                </div>
            </div>
        {/foreach}
    </div>
</div>
 
{include 'footer.tpl'}