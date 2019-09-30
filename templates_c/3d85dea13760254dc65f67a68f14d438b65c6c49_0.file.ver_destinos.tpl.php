<?php
/* Smarty version 3.1.33, created on 2019-09-30 22:14:26
  from 'C:\xampp\htdocs\proyectos\TPEspecialWeb2\Tp-Especial-Web2\templates\ver_destinos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d92622220e326_11242383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d85dea13760254dc65f67a68f14d438b65c6c49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEspecialWeb2\\Tp-Especial-Web2\\templates\\ver_destinos.tpl',
      1 => 1569874164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5d92622220e326_11242383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
?>
                <li>*<?php echo $_smarty_tpl->tpl_vars['destino']->value->id_destino;?>
, destino : <?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
, descripcion : <?php echo $_smarty_tpl->tpl_vars['destino']->value->descripcion;?>
, temporada alta :  <?php echo $_smarty_tpl->tpl_vars['destino']->value->temporada_alta;?>
, puntaje:  <?php echo $_smarty_tpl->tpl_vars['destino']->value->puntaje;?>
</li>
            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <form action="insertar" method="post">
                <div class="form-group">
                Nombre:<input type="text" name="nombre">
                Descripcion:<input type="text" name="descripcion">
                Temporada Alta:<input type="text" name="temporada_alta">
                Puntaje:<input type="number" name="puntaje">
                <button type="submit" class="btn btn-outline-primary">Insertar</button>
                </div>
            </form>
    </body>
</html>
<?php }
}
