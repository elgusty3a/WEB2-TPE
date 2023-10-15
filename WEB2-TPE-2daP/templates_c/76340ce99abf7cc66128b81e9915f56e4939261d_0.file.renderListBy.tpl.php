<?php
/* Smarty version 4.3.4, created on 2023-10-15 21:48:40
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\renderListBy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652c4218d42166_83206277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76340ce99abf7cc66128b81e9915f56e4939261d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\renderListBy.tpl',
      1 => 1697399175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c4218d42166_83206277 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center text-warning">
  <h1>Lista de <?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
s</h1><br>
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
            <th class="text-warning" scope="col">Precio</th>
          </tr>
          <thead>
          <tbody>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

              <tr class="text-center fs-4">
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->medidas;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</td>

              </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
      </table>
    </div>
    <div class="col">

    </div>
  </div>
</section><?php }
}
