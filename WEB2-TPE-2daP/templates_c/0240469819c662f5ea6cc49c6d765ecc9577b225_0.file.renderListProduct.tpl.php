<?php
/* Smarty version 4.3.4, created on 2023-10-21 02:40:16
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\renderListProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65331df0604319_66658986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0240469819c662f5ea6cc49c6d765ecc9577b225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\renderListProduct.tpl',
      1 => 1697848630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65331df0604319_66658986 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center text-warning">Lista de productos</h1><br>
<section class="conteiner">
  <div class="row g-0">
    <div class="col">
    </div>
    <div class="col-10">
      <table class="table table-dark table-striped table-sm">
        <thead>
          <tr class="text-center fs-3">
            <th class="text-warning" scope="col">Marca</th>
            <th class="text-warning" scope="col">Medida</th>
            <th class="text-warning" scope="col">Detalles</th>
            <th class="text-warning" scope="col">Categoria</th>
            <?php if (($_smarty_tpl->tpl_vars['log']->value)) {?>
              <th scope="col">Accion</th>
            <?php }?>
          </tr>
          <thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
              <tr class="text-center fs-5">
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->medidas;?>
</td>
                <td>
                  <form action="" method="GET">
                    <input type="hidden" name="idProduct" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">
                    <input type="hidden" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
">
                    <input type="hidden" name="medida" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->medidas;?>
">
                    <input type="hidden" name="indiceCarga" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->indice_carga;?>
">
                    <input type="hidden" name="indiceVelocidad" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->indice_velocidad;?>
">
                    <input type="hidden" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
">
                    <input type="hidden" name="categorias" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
">
                    <button class="btn btn-success" type="submit" name="action" value="details">Detalles</button>
                  </form>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</td>
                <?php if (($_smarty_tpl->tpl_vars['log']->value)) {?>
                  <td>
                    <form action="" method="GET">
                      <input type="hidden" name="idProduct" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">
                      <input type="hidden" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
">
                      <input type="hidden" name="medida" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->medidas;?>
">
                      <input type="hidden" name="indiceCarga" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->indice_carga;?>
">
                      <input type="hidden" name="indiceVelocidad" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->indice_velocidad;?>
">
                      <input type="hidden" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
">
                      <input type="hidden" name="categorias" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
">
                      <button class="btn btn-secondary" type="submit" name="action" value="edit">Edit</button>
                      <button class="btn btn-danger" type="submit" name="action" value="erase">Erase</button>
                    </form>
                  </td>
                <?php }?>
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
