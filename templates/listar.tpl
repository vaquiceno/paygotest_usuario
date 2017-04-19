<!DOCTYPE html>
<html lang="es">
<head>
  <title>Listar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
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
  </script>
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
		    {foreach name=outer item=row from=$arr}
		    	<tr id="{$row.id}">
		    	{foreach item=item from=$row}
		    		<td> {$item}</td>
			    {/foreach}
			    <td>
			    	<div class="radio">
					  <label><input type="radio" name="id" value="{$row.id}" required></label>
					</div>
			    </td>
			    </tr>
			{/foreach}
		    </tbody>
		  </table>
		</form>
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

</body>
</html>