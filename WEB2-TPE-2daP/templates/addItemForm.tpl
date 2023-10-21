<section class="container mt-3 mb-3 col-12 col-md-8 col-lg-6 col-xl-5">
    <div class="card p-3 bg-success border-0">
    <form class="text-center p-3" action="" method="GET">
      <h1>Nuevo Producto</h1>
      <label class="col-form-label" for="marca">Marca:</label>
        <input class="form-control" type="text" name="marca" value="" placeholder="" id="marca" require="marca" /><br />
      <label class="col-form-label" for="medida">Medida:</label>
        <input class="form-control" type="text" name="medida" value="" placeholder="" id="medida" require="medida" /><br />

      <label class="col-form-label" for="categoria">Categoria:</label>
        <select name="categorias" id="categorias">
          <option value=""> </option>
          {foreach from=$categorias item=cat}
            <option value="{$cat->id}">{$cat->categoria}</option>
          {/foreach}
        </select><br>
      <label class="col-form-label" for="precio">Precio:</label>
        <input class="form-control" type="text" name="precio" value="" placeholder="" id="precio" require="precio" /><br />
      <label class="col-form-label" for="indiceCarga">Indice Carga:</label>
        <input class="form-control" type="text" name="indiceCarga" value="" placeholder="" id="indiceCarga"/><br />
      <label class="col-form-label" for="indiceVelocidad">Indice Velocidad:</label>
        <input class="form-control" type="text" name="indiceVelocidad" value="" placeholder="" id="indiceVelocidad" /><br />

      <button class="btn btn-secondary" value="btnagregarItem" type="submit" name="action">Agregar</button>
    </form>
    </div>
    </section>