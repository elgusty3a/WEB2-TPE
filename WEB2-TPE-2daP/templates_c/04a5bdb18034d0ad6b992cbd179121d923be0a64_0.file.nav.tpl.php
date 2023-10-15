<?php
/* Smarty version 4.3.4, created on 2023-10-15 22:12:48
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652c47c0ef71a5_96917956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a5bdb18034d0ad6b992cbd179121d923be0a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\nav.tpl',
      1 => 1697400745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c47c0ef71a5_96917956 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg bg-dark navbar-dark">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">TresA Neumaticos</a>
    <a href="home" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
      <img src="<?php echo BASE_URL;?>
img/icons8-tyre-64.png" alt="mdo" width="32" height="32" class="rounded-circle">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
              <li><a class="text-secondary dropdown-item" href="filter/<?php echo $_smarty_tpl->tpl_vars['cat']->value->categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->categoria;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</nav><?php }
}
