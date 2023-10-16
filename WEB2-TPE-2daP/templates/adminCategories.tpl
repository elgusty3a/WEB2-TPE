<h1 class="text-center text-warning">Lista de Categorias</h1><br>


<section class="conteiner mb-3">
  <div class="row g-0">
    <div class="col">
    </div>
    <div class="col-4">
      <table class="table table-dark table-striped table-sm">
        <thead>
          <tr class="text-center fs-3">
            <th class="text-warning" scope="col">Categoria</th>
            {if ($log)}
              <th scope="col">Accion</th>
            {/if}
          </tr>
          <thead>
          <tbody>
            {foreach from=$categorias item=cat}
              <tr class="text-center fs-5">
                <td>{$cat->categoria}</td>
                {if ($log)}
                  <td>
                    <form action="" method="GET">
                      <input type="hidden" name="id" value="{$cat->id}">
                      <input type="hidden" name="categoria" value="{$cat->categoria}">
                      <button class="btn btn-secondary" type="submit" name="action" value="editCat">Edit</button>
                      <button class="btn btn-danger" type="submit" name="action" value="eraseCat">Erase</button>
                    </form>
                  </td>
                {/if}
              </tr>
            {/foreach}
          </tbody>
      </table>
        <a href="addCat"><button class="btn btn-success" type="button" name="addCat" value="addCat">Agregar nueva</button></a>
    </div>
    <div class="col-4">
    </div>
  </div>
</section>