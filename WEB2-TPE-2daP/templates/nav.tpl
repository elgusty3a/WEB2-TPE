<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">TresA Neumaticos</a>
    <a href="home" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
      <img src="{BASE_URL}img/icons8-tyre-64.png" alt="mdo" width="32" height="32" class="rounded-circle">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item">
          <a class="text-white nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="list">Nuestros Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Productos por categoria
          </a>
          <ul class="dropdown-menu bg-dark">
            {foreach from=$categorias item=cat}
              <li><a class="text-secondary dropdown-item" href="filter/{$cat->categoria}">{$cat->categoria}</a></li>
            {/foreach}
          </ul>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="about">About</a>
        </li>
      </ul>
      <div class="col-md-3 col-md-auto text-end">
        <a href="login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
        <a href="register"><button type="button" class="btn btn-outline-warning">Register</button></a>
      </div>
    </div>
  </div>
</nav>