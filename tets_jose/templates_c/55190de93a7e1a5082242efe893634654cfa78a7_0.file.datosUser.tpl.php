<?php
/* Smarty version 3.1.33, created on 2019-10-12 22:11:46
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\templates\datosUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da23382af4a11_03519515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55190de93a7e1a5082242efe893634654cfa78a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\templates\\datosUser.tpl',
      1 => 1570906594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da23382af4a11_03519515 (Smarty_Internal_Template $_smarty_tpl) {
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
