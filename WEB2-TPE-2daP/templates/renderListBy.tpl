<div class="text-center text-warning">
  <h1>Lista de {$filter}s</h1><br>
</div>


<section class="conteiner">
  <div class="row g-0">
    <div class="col">

    </div>
    <div class="col-8">
      <table class="table table-dark table-striped table-sm">
        <thead>
          <tr class="text-center fs-2">
            <th class="text-warning" scope="col">Marca</th>
            <th class="text-warning" scope="col">Medida</th>
            <th class="text-warning" scope="col">Detalles</th>
          </tr>
          <thead>
          <tbody>

            {foreach from=$products item=product}

              <tr class="text-center fs-4">
                <td>{$product->marca}</td>
                <td>{$product->medidas}</td>
                <td>
                  <form action="" method="GET">
                    <input type="hidden" name="idProduct" value="{$product->id_producto}">
                    <input type="hidden" name="marca" value="{$product->marca}">
                    <input type="hidden" name="medida" value="{$product->medidas}">
                    <input type="hidden" name="indiceCarga" value="{$product->indice_carga}">
                    <input type="hidden" name="indiceVelocidad" value="{$product->indice_velocidad}">
                    <input type="hidden" name="precio" value="{$product->precio}">
                    <input type="hidden" name="categorias" value="{$product->categoria}">
                    <button class="btn btn-success" type="submit" name="action" value="details">Detalles</button>
                  </form>
                </td>
              </tr>

            {/foreach}
          </tbody>
      </table>
    </div>
    <div class="col">

    </div>
  </div>
</section>