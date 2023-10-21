{include file="head.tpl"}
{include file="{$nav}"}

<div class="card text-center">
  <div class="card-header">
  <h1>{$products['medida']}</h1>
  <h2>{$products['marca']}</h2>
  </div>
  <div class="card-body">
    <h4 class="card-title">Detalles</h4>
    <p class="card-text">Indice de carga: {$products['indiceCarga']}</p>
    <p class="card-text">Indice de velocidad: {$products['indiceVelocidad']}</p><br>
    <h5 class="card-text">Precio: $ {$products['precio']}</h5>
    <a href="list" class="btn btn-primary">Volver</a>
  </div>
</div>

{include file="footer.tpl"}
