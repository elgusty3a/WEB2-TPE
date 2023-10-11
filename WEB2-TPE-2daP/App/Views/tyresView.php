<?php
class tyresView {

  function renderListProduct($products){
    echo "<h1>Lista de productos</h 1>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo "<table>
            <thead>
              <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Medida</th>
              </tr>
            <thead>
            <tbody>
    " ;
    foreach($products as $product) {
      echo '
        <tr>
          <td>'.$product->tipo.'</td>
          <td>'.$product->marca.'</td>
          <td>'.$product->medidas.'</td>
        </tr>
      ' ;
    }
    echo " </tbody>
        </table>" ;
  }
  function renderError() {
    echo "<h2>Error! Género no especificado.</h2>" ;
  }




}