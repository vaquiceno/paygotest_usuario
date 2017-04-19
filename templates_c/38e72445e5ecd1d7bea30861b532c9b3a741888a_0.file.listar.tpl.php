<?php
/* Smarty version 3.1.31, created on 2017-04-19 08:27:32
  from "C:\xampp\htdocs\paygotest_usuario\templates\listar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f70354566861_58433551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e72445e5ecd1d7bea30861b532c9b3a741888a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paygotest_usuario\\templates\\listar.tpl',
      1 => 1492583249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f70354566861_58433551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Listar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body style="padding-top: 60px;">

<div class="container">
  <div class="well">
  	  <button type="button" class="col-xs-2 col-xs-offset-2 btn btn-default">Eliminar</button>
  	  <button type="button" class="col-xs-2 col-xs-offset-4 btn btn-default">Editar</button>
	  <table class="table">
	    <thead>
	      <tr>
	      	<th>Id</th>
	        <th>Nombre</th>
	        <th>Apellido</th>	        
	      </tr>
	    </thead>
	    <tbody>
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'row', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	    	<tr>
	    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	    		<td> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		    <td>
		    	<div class="radio">
				  <label><input type="radio" name="optradio" value="male"></label>
				</div>
		    </td>
		    </tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	    </tbody>
	  </table>
  </div>    
</div>

</body>
</html><?php }
}
