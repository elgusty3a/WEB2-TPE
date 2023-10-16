<?php
/* Smarty version 4.3.4, created on 2023-10-16 04:47:50
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\adminCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652ca45610b528_55296056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7171613bf264b039ec6a39700e42d2bd9f9ea409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\adminCategories.tpl',
      1 => 1697424456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ca45610b528_55296056 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center text-warning">Lista de Categorias</h1><br>


<section class="conteiner mb-3">
  <div class="row g-0">
    <div class="col">
    </div>
    <div class="col-4">
      <table class="table table-dark table-striped table-sm">
        <thead>
          <tr class="text-center fs-3">
            <th class="text-warning" scope="col">Categoria</th>
            <?php if (($_smarty_tpl->tpl_vars['log']->value)) {?>
              <th scope="col">Accion</th>
            <?php }?>
          </tr>
          <thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
              <tr class="text-center fs-5">
                <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->categoria;?>
</td>
                <?php if (($_smarty_tpl->tpl_vars['log']->value)) {?>
                  <td>
                    <form action="" method="GET">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
">
                      <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->categoria;?>
">
                      <button class="btn btn-secondary" type="submit" name="action" value="editCat">Edit</button>
                      <button class="btn btn-danger" type="submit" name="action" value="eraseCat">Erase</button>
                    </form>
                  </td>
                <?php }?>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
      </table>
        <a href="addCat"><button class="btn btn-success" type="button" name="addCat" value="addCat">Agregar nueva</button></a>
    </div>
    <div class="col-4">
    </div>
  </div>
</section><?php }
}
