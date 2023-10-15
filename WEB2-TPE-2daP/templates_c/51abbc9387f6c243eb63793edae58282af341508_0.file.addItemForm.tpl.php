<?php
/* Smarty version 4.3.4, created on 2023-10-15 23:46:44
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\addItemForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652c5dc49a78d2_10112452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51abbc9387f6c243eb63793edae58282af341508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\addItemForm.tpl',
      1 => 1697406370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c5dc49a78d2_10112452 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container mt-3 mb-3 col-12 col-md-8 col-lg-6 col-xl-5">
    <div class="card p-3 bg-success border-0">
    <form class="text-center p-3" action="" method="GET">
      <h1>Nuevo Producto</h1>
      <label class="col-form-label" for="marca">Marca:</label>
        <input class="form-control" type="text" name="marca" value="" placeholder="" id="marca" require="marca" /><br />
      <label class="col-form-label" for="medida">Medida:</label>
        <input class="form-control" type="text" name="medida" value="" placeholder="" id="medida" require="medida" /><br />
      
      <label class="col-form-label" for="categoria">Categoria:</label>
        <select name="categorias" id="categorias">
          <option value=""> </option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->categoria;?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select><br>
      <label class="col-form-label" for="precio">Precio:</label>
        <input class="form-control" type="text" name="precio" value="" placeholder="" id="precio" require="precio" /><br />
      <label class="col-form-label" for="indiceCarga">Indice Carga:</label>
        <input class="form-control" type="text" name="indiceCarga" value="" placeholder="" id="indiceCarga"/><br />
      <label class="col-form-label" for="indiceVelocidad">Indice Velocidad:</label>
        <input class="form-control" type="text" name="indiceVelocidad" value="" placeholder="" id="indiceVelocidad" /><br />
      

      <button class="btn btn-secondary" value="btnagregarItem" type="submit" name="action">Agregar</button>

      <!-- <button class="btn btn-info" value="btnbuscar" type="submit" name="action">Buscar</button> -->
      <!-- <button class="btn btn-primary" value="btneditar" type="submit" name="action">Editar</button> -->
      <!-- <button class="btn btn-danger" value="btneliminar" type="submit" name="action">Eliminar Materia</button> -->
      <!-- <button class="btn btn-light" value="btnlimpiar" type="submit" name="action">Limpiar</button> -->
      <!-- <button class="btn btn-light" value="btnarray" type="submit" name="action">array</button> -->
    </form>
    </div>
    </section><?php }
}
