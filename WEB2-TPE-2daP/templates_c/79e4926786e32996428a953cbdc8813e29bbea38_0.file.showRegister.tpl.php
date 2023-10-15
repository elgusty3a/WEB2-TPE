<?php
/* Smarty version 4.3.4, created on 2023-10-15 21:56:05
  from 'C:\xampp\htdocs\TUDAI-xampp\WEB2-TPE\WEB2-TPE-2daP\templates\showRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652c43d54b3434_58098014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79e4926786e32996428a953cbdc8813e29bbea38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TUDAI-xampp\\WEB2-TPE\\WEB2-TPE-2daP\\templates\\showRegister.tpl',
      1 => 1697394513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c43d54b3434_58098014 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="vh-80 gradient-custom">
  <div class="container py-3 h-80">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="" method="POST" class="mb-md-3 mt-md-2 pb-3">
              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-3">Please enter your username, e-mail and password!</p>
              <div class="form-outline form-white mb-4">
                <input type="text" name="userName" id="userName" class="form-control form-control-lg" />
                <label class="form-label" for="userName">Username</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="pass" id="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
              <button class="btn btn-outline-light btn-lg px-5" name="action" value="btnagregar" type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php }
}
