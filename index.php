<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
	<form class="form-horizontal">
		<div class="form-group">
	  	<input class="col-sm-12" type="file" id="exampleInputFile"> 
	  </div> 
	  <div class="form-group">
	    <div class="col-sm-6">
	      <input type="number" min="1" class="form-control" id="inputEmail3" placeholder="número de registros" disabled>
	    </div>
	    <div class="col-sm-6">
	      <select class="form-control">
	     	 	<option value="" selected disabled>Orden</option>
	     	 	<option value="A">Ascendente</option>
	     	 	<option value="D">Descendente</option>
				</select>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-5 col-sm-2">
	      <button type="submit" class="btn btn-default" style="width:100%;">Procesar</button>
	    </div>
	  </div>
	</form>
  </div>    
</div>

</body>
</html>