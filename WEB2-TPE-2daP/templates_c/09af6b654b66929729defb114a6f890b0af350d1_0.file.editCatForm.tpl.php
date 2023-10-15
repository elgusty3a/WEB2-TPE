<?php
/* Smarty version 4.3.4, created on 2023-10-15 23:35:33
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\editCatForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652c5b25cf35c5_86096348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09af6b654b66929729defb114a6f890b0af350d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\editCatForm.tpl',
      1 => 1697405636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c5b25cf35c5_86096348 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container  col-12 p-5 col-md-8 col-lg-6 col-xl-5">
    <div class="card bg-success border-0">
    <form class="text-center p-3" action="" method="GET">
      <h1>Edite Categoria</h1>
      <input class="form-control" type="hidden" name="idCat" value="<?php echo $_smarty_tpl->tpl_vars['idCat']->value;?>
" placeholder="" id="idCat" require="idCat" /><br />
      <label class="col-form-label" for="categoria">Categoria:</label>
        <input class="form-control" type="text" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
" placeholder="" id="categoria" require="categoria" /><br />
      <button class="btn btn-secondary" value="btneditCat" type="submit" name="action">Agregar</button>
    </form>
    </div>
    </section><?php }
}
