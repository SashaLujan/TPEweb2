{include 'templates/headerAdmin.tpl'}
<div class="container">
    <form action="guardarEditCancion" method="post">
        <input class="d-none" name="id_cancion" value={$cancion->id_cancion}>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombreCancion">Nombre de la cancion</label>
                <input type="text" class="form-control" id="nombreCancion" name="nombreCancion" value={$cancion->nombre_cancion}>
            </div>
            <div class="form-group col-md-4">
                <label for="nombreBanda">Banda</label>
                <select id="nombreBanda" class="form-control" name="idBanda">
                {foreach $bandas item= banda}
                    {if $cancion->id_banda_fk == $banda->id_banda}
                        
                        <option selected value={$banda->id_banda}>{$banda->nombre_banda}</option>
                    {else}
                        <option value={$banda->id_banda}>{$banda->nombre_banda}</option>
                    {/if}
                {/foreach}
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero" value={$cancion->genero}>
            </div>
        </div>
        <div class="form-group">
            <label for="letraCancion">Letra de la canción</label>
            <textarea class="form-control" id="letraCancion" rows="3" name="letraCancion">{$cancion->letra}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Editar Canción</button>
    </form>
</div>
{include 'templates/footer.tpl'}