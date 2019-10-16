<?php
/* Smarty version 3.1.33, created on 2019-10-16 12:56:12
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\Tp-Especial-Web2\templates\datosUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6f74c663d36_96345553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a148dc1ecc5875e56d3a0f9ad7024e57664a5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\Tp-Especial-Web2\\templates\\datosUser.tpl',
      1 => 1571222155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da6f74c663d36_96345553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <form action="datosUser" method="post">
            <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" value="Guardar">
        </form>
    </body>
</html><?php }
}
