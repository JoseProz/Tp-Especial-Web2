<?php
/* Smarty version 3.1.33, created on 2019-10-16 12:56:06
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\Tp-Especial-Web2\templates\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6f746b860f9_02295494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f51534d55c9d7580373f882cedec64286681fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\Tp-Especial-Web2\\templates\\Inicio.tpl',
      1 => 1571222155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da6f746b860f9_02295494 (Smarty_Internal_Template $_smarty_tpl) {
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
