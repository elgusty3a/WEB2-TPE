<section class="container  col-12 p-5 col-md-8 col-lg-6 col-xl-5">
    <div class="card bg-success border-0">
    <form class="text-center p-3" action="" method="GET">
      <h1>Edite Categoria</h1>
      <input class="form-control" type="hidden" name="idCat" value="{$idCat}" placeholder="" id="idCat" require="idCat" /><br />
      <label class="col-form-label" for="categoria">Categoria:</label>
        <input class="form-control" type="text" name="categoria" value="{$categoria}" placeholder="" id="categoria" require="categoria" /><br />
      <button class="btn btn-secondary" value="btneditCat" type="submit" name="action">Agregar</button>
    </form>
    </div>
    </section>