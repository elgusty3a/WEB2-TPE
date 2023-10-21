<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TresA Neumaticos</a>
    <a href="home" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
      <img src="{BASE_URL}img/icons8-tyre-64.png" alt="mdo" width="32" height="32" class="rounded-circle">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos por categoria
          </a>
          <ul class="dropdown-menu bg-dark">
          {foreach from=$categorias item=cat}
            <li><a class="text-secondary dropdown-item" href="filter/{$cat->categoria}">{$cat->categoria}</a></li>
          {/foreach}
          </ul>
        </li>
        <li class="nav-item dropdown">
          <div class="btn-group">
            <button type="button" class="btn btn-danger">Opciones de Administrador</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="list">Listar Items</a></li>
              <li><a class="dropdown-item" href="add">Agregar Item</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="adminCategories">Administrar categorias</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="col-md-3 col-md-auto text-end">
        <div class="d-flex flex-shrink-0 dropdown align-items-center">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/elgusty3a.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu bg-dark text-small shadow">
            <li><a class="text-secondary dropdown-item" href="logout">Cerrar sesión</a></li>
          </ul>
          <div class="align-items-center ms-3">
            <p class="text-white mb-0">Bienvenido {$userName}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
