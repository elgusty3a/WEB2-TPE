<h1 class="text-center text-warning">Lista de productos</h1><br>
<section class="conteiner">
  <div class="row g-0">
    <div class="col">
    </div>
    <div class="col-10">
      <table class="table table-dark table-striped table-sm">
        <thead>
          <tr class="text-center fs-3">
            <th class="text-warning" scope="col">Marca</th>
            <th class="text-warning" scope="col">Medida</th>
            <th class="text-warning" scope="col">Ind. Carga</th>
            <th class="text-warning" scope="col">Ind. Vel.</th>
            <th class="text-warning" scope="col">Precio</th>
            <th class="text-warning" scope="col">Categoria</th>
            {if ($log)}
              <th scope="col">Accion</th>
            {/if}
          </tr>
          <thead>
          <tbody>
            {foreach from=$products item=product}
              <tr class="text-center fs-5">
                <td>{$product->marca}</td>
                <td>{$product->medidas}</td>
                <td>{$product->indice_carga}</td>
                <td>{$product->indice_velocidad}</td>
                <td>{$product->precio}</td>
                <td>{$product->categoria}</td>
                {if ($log)}
                  <td>
                    <form action="" method="GET">
                      <input type="hidden" name="idProduct" value="{$product->id_producto}">
                      <input type="hidden" name="marca" value="{$product->marca}">
                      <input type="hidden" name="medida" value="{$product->medidas}">
                      <input type="hidden" name="indiceCarga" value="{$product->indice_carga}">
                      <input type="hidden" name="indiceVelocidad" value="{$product->indice_velocidad}">
                      <input type="hidden" name="precio" value="{$product->precio}">
                      <input type="hidden" name="categorias" value="{$product->categoria}">
                      <button class="btn btn-secondary" type="submit" name="action" value="edit">Edit</button>
                      <button class="btn btn-danger" type="submit" name="action" value="erase">Erase</button>
                    </form>
                  </td>
                {/if}
              </tr>
              {/foreach}
            </tbody>
        </table>
      </div>
      <div class="col">
      </div>
    </div>
  </section>