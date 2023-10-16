<?php
/* Smarty version 4.3.4, created on 2023-10-16 20:09:11
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\addCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d7c4738ba36_79363259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b58bf70818376f5d2ed90e5a755d716a3b3d18c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\addCateg.tpl',
      1 => 1697424254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d7c4738ba36_79363259 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container  col-12 p-5 col-md-8 col-lg-6 col-xl-5">
  <div class="card bg-success border-0">
    <form class="text-center p-3" action="" method="GET">
      <h1>Nueva Categoria</h1>
      <label class="col-form-label" for="categoria">Categoria:</label>
        <input class="form-control" type="text" name="categoria" value="" placeholder="" id="categoria" require="categoria" /><br />
      <button class="btn btn-secondary" value="btnagregarCat" type="submit" name="action">Agregar</button>
    </form>
   </div>
</section><?php }
}
