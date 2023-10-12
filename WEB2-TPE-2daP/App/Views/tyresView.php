<?php


class tyresView {

  function __construct(){


  }

  function showHeader(){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="'.BASE_URL.'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="'.BASE_URL.'ejer5.css"> -->
  <title>Tresa Neumaticos</title>
</head>
<body>
<h1>HOLA HEADER!!!</h1>
';
  }
  function filterForm(){
    echo '
    
    ';
  }

  function renderListProduct($products){
    echo "<h1>Lista de productos</h 1>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '<table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">Tipo</th>
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
              </tr>
            <thead>
            <tbody>
    ' ;
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


  function showFooter(){
    echo '<h3>SOY UN FOOTER!!!</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
';

  }




}