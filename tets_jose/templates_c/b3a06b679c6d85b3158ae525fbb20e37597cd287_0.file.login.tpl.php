<?php
/* Smarty version 3.1.33, created on 2019-10-10 22:34:29
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f95d561cd74_87867813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a06b679c6d85b3158ae525fbb20e37597cd287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\templates\\login.tpl',
      1 => 1570739173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5d9f95d561cd74_87867813 (Smarty_Internal_Template $_smarty_tpl) {
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
