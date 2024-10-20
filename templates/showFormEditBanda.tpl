{include 'templates/headerAdmin.tpl'}
    <div class="container mt-5">
    <div class="bandas"> 
        <form action="guardarEditBanda" method="POST" class="my-4">
            <h4>Modifique los datos de la banda</h4>
            <div class="form-group">
                <input name="id" type="text" value="{$banda->id_banda}" class="form-control" hidden>
                <label>Nombre de la banda</label>
                <input name="nombre" type="text" value="{$banda->nombre_banda}" class="form-control">
                <label>ingrese URL de imágen</label>
                <input name="foto" type="text" value="{$banda->img_banda}" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-dark" href="listaBandas"><b>Volver</b></a>
        </form>
    </div>
    </div>

{include 'templates/footer.tpl'}