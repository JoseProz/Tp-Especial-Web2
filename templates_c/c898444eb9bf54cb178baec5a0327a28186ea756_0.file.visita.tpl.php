<?php
/* Smarty version 3.1.33, created on 2019-10-16 12:56:17
  from 'C:\xampp\htdocs\proyectos\web2\Tp-Especial-Web2\Tp-Especial-Web2\templates\visita.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6f75153f113_33205390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c898444eb9bf54cb178baec5a0327a28186ea756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Tp-Especial-Web2\\Tp-Especial-Web2\\templates\\visita.tpl',
      1 => 1571222155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5da6f75153f113_33205390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ver_destinos']->value, 'destino');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
?>
                <li class="list-group-item list-group-item-secondary">*<?php echo $_smarty_tpl->tpl_vars['destino']->value->id_destino;?>
, destino : <?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
, descripcion : <?php echo $_smarty_tpl->tpl_vars['destino']->value->descripcion;?>
, temporada alta :  <?php echo $_smarty_tpl->tpl_vars['destino']->value->temporada_alta;?>
, puntaje:  <?php echo $_smarty_tpl->tpl_vars['destino']->value->puntaje;?>
</a></li>
            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </body>
</html>
<?php }
}
