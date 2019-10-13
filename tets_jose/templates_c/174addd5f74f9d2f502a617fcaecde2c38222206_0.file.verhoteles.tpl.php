<?php
/* Smarty version 3.1.33, created on 2019-10-11 00:24:08
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\templates\verhoteles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9faf8801a8f9_87552585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174addd5f74f9d2f502a617fcaecde2c38222206' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\templates\\verhoteles.tpl',
      1 => 1570738676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5d9faf8801a8f9_87552585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    <th scope="col">id_destino</th>
                    </tr>
                </thead>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ver_hoteles']->value, 'hotel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
if ($_smarty_tpl->tpl_vars['hotel']->value->ocupado == 1) {?>
<strike><tr><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->nombre;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->telefono;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->direccion;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->precio;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->ocupado;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_destino;?>
</td></strike><td><a href='inicializar/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_hotel;?>
'>Inicializar</a> -<a href='borrar/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_hotel;?>
'>Borrar</a></td></tr>
<?php } else { ?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->nombre;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->telefono;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->direccion;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->precio;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->ocupado;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_destino;?>
</td><td><a href='finalizar/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_hotel;?>
'>Ocupado Totalidad</a>- <a href='borrar/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->id_hotel;?>
'>Borrar</a></td></tr>
<?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<form action="insertar" method="post">
    <tr><td><input type="text" name="nombre"></td>
    <td><input type="numb" name="telefono"></td>
    <td><input type="text" name="direccion"></td>
    <td><input type="numb" name="precio"></td>
    <td></td>
    <td><input type="numb" name="id_destino"></td>
    <td><input type="submit" value="Insertar"></td></tr>
</form>
</table>
</body>
</html>
<?php }
}
