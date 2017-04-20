<?php
/* Smarty version 3.1.31, created on 2017-04-20 02:05:01
  from "C:\xampp\htdocs\paygotest_usuario\templates\listar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f7fb2dbf6333_35390798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e72445e5ecd1d7bea30861b532c9b3a741888a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paygotest_usuario\\templates\\listar.tpl',
      1 => 1492646693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7fb2dbf6333_35390798 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php echo '<script'; ?>
 src="js/jquery.twbsPagination.min.js"><?php echo '</script'; ?>
>

</head>
<body style="padding-top: 60px;">

<div class="container">
  <div class="well">
  	  	<form action="db/deleteUser.php" method="post">
  	      <button type="submit" name="submit" class="col-xs-2 col-xs-offset-2 btn btn-default">Eliminar</button>
	  	  <button type="button" class="col-xs-2 col-xs-offset-1 btn btn-default" onclick="getId()">Editar</button>
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
		    	<tr id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
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
					  <label><input type="radio" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" required></label>
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
		<div class="text-center">
			<ul id="pagination-demo" class="pagination-lg"></ul>
		</div>
		
	    <div class="modal fade" id="modalEdit" role="dialog">
			<div class="modal-dialog">
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Modificar Usuario</h4>
			    </div>
			    <div id = "algo" class="modal-body">
			      <form role="form" action="db/modifyUser.php" method="post">                    
                    <div class="form-group">
                      <label>Nombre</label>
                      <input id="fname" title="Se necesita un Nombre" type="text" class="form-control" placeholder="Nombre" name="name" maxlength="20" required/>
                    </div>
                    <div class="form-group">
                      <label>Apellido</label>
                      <input id="flastname" title="Se necesita un Apellido" type="text" class="form-control" placeholder="Apellido" name="lastname" maxlength="20" required/>
                    </div>
                    <input id="fid" type="hidden" name="id">
                    <button type="submit" name="submit" class="btn btn-default" style="margin-top:10px;">Actualizar</button>
                  </form>
			    </div>
			  </div>			  
			</div>
		</div>
  </div>    
</div>

  <?php echo '<script'; ?>
 type="text/javascript">
	  function getId(){
	  	if ($("input[name=id]:checked").val() == undefined){
	  		alert("selecciona una opción primero");
	  		return;	  		
	  	}
	  	$id = $("input[name=id]:checked").val();
	  	$("#fid").val($id);
	  	var kids = $("#"+$id).children();
	  	$("#fname").val(kids[1].textContent);
	  	$("#flastname").val(kids[2].textContent);
	  	$('#modalEdit').modal('show');
	  }
	  $('#pagination-demo').twbsPagination({
	        totalPages: <?php echo $_smarty_tpl->tpl_vars['npg']->value;?>
,
	        visiblePages: 7,
	        startPage: <?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
,
	        initiateStartPageClick: false,
	        onPageClick: function (event, page) {
	            $('#page-content').text('Page ' + page);
	            // se redirige a la nueva pagina con un parametro en la url
	            window.location.replace("/paygotest_usuario/listar.php?page="+page);
	        }
	    });
	<?php echo '</script'; ?>
>

</body>
</html><?php }
}
