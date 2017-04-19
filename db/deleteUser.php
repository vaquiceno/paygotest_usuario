<?php 

if(!isset($_POST["submit"])) {
	header('Location: /paygotest_usuario/listar.php');
}
if(!isset($_POST["id"])) {
	die("No seleccionó un registro para eliminar");
}

require("database.php");

$database = new Database(); 

$database->DeleteUniqueUser($_POST["id"]);

//redirigir a la vista de listar usuarios
header("Location: /paygotest_usuario/listar.php");

?>