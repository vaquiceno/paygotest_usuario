<?php
/* Smarty version 3.1.31, created on 2017-04-19 09:03:06
  from "C:\xampp\htdocs\paygotest_usuario\templates\listar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f70baa7d85b2_59882139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e72445e5ecd1d7bea30861b532c9b3a741888a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paygotest_usuario\\templates\\listar.tpl',
      1 => 1492585384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f70baa7d85b2_59882139 (Smarty_Internal_Template $_smarty_tpl) {
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
  	  	<form action="db/saveCSV.php" method="post">
  	      <button type="submit" name="submit" class="col-xs-2 col-xs-offset-2 btn btn-default">Eliminar</button>
	  	  <button type="button" class="col-xs-2 col-xs-offset-1 btn btn-default" data-toggle="modal" data-target="#modalEdit">Editar</button>
	  	  <a type="button" class="col-xs-2 col-xs-offset-1 btn btn-default" href="/paygotest_usuario/">Cargar nuevo CVS</a>
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
					  <label><input type="radio" name="optradio" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"></label>
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
		</form>
	    <div class="modal fade" id="modalEdit" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Modal Header</h4>
			    </div>
			    <div class="modal-body">
			      <p>Some text in the modal.</p>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			  </div>
			  
			</div>
		</div>
  </div>    
</div>

</body>
</html><?php }
}
