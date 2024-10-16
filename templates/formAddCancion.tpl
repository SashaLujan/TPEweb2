{include 'templates/headerAdmin.tpl'}
<div class="container">
    <form action="guardarCancion" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombreCancion">Nombre de la cancion</label>
                <input type="text" class="form-control" id="nombreCancion" name="nombreCancion">
            </div>
            <div class="form-group col-md-4">
                <label for="nombreBanda">Banda</label>
                <select id="nombreBanda" class="form-control" name="idBanda">
                {foreach $bandas item= banda}
                    <option value={$banda->id_banda}>{$banda->nombre_banda}</option>
                {/foreach}
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero">
            </div>
        </div>
        <div class="form-group">
            <label for="letraCancion">Letra de la canción</label>
            <textarea class="form-control" id="letraCancion" rows="3" name="letraCancion"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Agregar Canción</button>
    </form>
</div>
{include 'templates/footer.tpl'}