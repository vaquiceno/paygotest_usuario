<!DOCTYPE html>
<html lang="en">
<head>
  <title>Importar Usuarios</title>
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
	<form class="form-horizontal" action="db/saveCSV.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<label class="col-sm-1 control-label">CSV:</label>	  	
	  	<div class="col-sm-4">
	      <input type="file" name="file" accept=".csv" required> 
	    </div>
	  	<label class="col-sm-1 control-label">Registros:</label>
	    <div class="col-sm-2">
	      <input value="1" type="number" name="number" min="1" class="form-control" placeholder="número de registros" required>
	    </div>
	    <label class="col-sm-1 control-label">Orden:</label>
	    <div class="col-sm-3">
	      	<select class="form-control" name="option" required>
	     	 	<option value="A">Ascendente</option>
	     	 	<option value="D">Descendente</option>
			</select>
	    </div>
	  </div> 
	  <div class="form-group">
	    <div class="col-sm-offset-5 col-sm-2">
	      <button type="submit" name="submit" class="btn btn-default" style="width:100%;">Procesar</button>
	    </div>
	  </div>
	</form>
  </div>    
</div>

</body>
</html>