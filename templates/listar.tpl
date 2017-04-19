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
	    {foreach name=outer item=row from=$arr}
	    	<tr>
	    	{foreach item=item from=$row}
	    		<td> {$item}</td>
		    {/foreach}
		    <td>
		    	<div class="radio">
				  <label><input type="radio" name="optradio" value="male"></label>
				</div>
		    </td>
		    </tr>
		{/foreach}
	    </tbody>
	  </table>
  </div>    
</div>

</body>
</html>