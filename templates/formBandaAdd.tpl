{include 'templates/headerAdmin.tpl'}
    <div class="container mt-5">
    <div class="bandas"> 
       <form action="guardarBanda" method="post" class="my-4">
            <h4>Agregue una banda nueva</h4>
            <div class="form-group">
                <label>Ingrese el nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-dark" href="listaBandas">volver</a>
        </form>
    </div>
    </div>
    
{include 'templates/footer.tpl'}