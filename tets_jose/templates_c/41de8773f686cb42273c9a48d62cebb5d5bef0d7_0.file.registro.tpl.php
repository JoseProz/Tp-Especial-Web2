<?php
/* Smarty version 3.1.33, created on 2019-10-13 07:41:34
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da2b90e742d44_33097040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41de8773f686cb42273c9a48d62cebb5d5bef0d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\templates\\registro.tpl',
      1 => 1570945290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da2b90e742d44_33097040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <form action="iniciarRegistro" method="post">
            <input type="submit" value="Registrarme">
        </form>
         <form action="iniciarVisita" method="post">
            <input type="submit" value="Invitado">
        </form>
         <form action="iniciarSesion" method="post">
            <input type="submit" value="Login">
        </form>

    </body>
</html><?php }
}
