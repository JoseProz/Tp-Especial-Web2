<?php
/* Smarty version 3.1.33, created on 2019-10-16 23:42:57
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\Tp-Especial-Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da78ee107e520_31091396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610a698a880e41a6092a3bd894ecb6bde1a7c313' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\Tp-Especial-Web2\\templates\\login.tpl',
      1 => 1571258059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da78ee107e520_31091396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <form action="iniciarSesion" method="post">
            <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>
<?php }
}
