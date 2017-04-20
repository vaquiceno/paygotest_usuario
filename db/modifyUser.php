<?php 

if(!isset($_POST["submit"])) {
	header('Location: /paygotest_usuario/listar.php');
}
if(!isset($_POST["id"])) {
	die("No seleccionó un registro para modificar");
}
if(!isset($_POST["name"])) {
	die("No seleccionó un nuevo nombre");
}
if(!isset($_POST["lastname"])) {
	die("No seleccionó un nuevo apellido");
}

require("database.php");

$database = new Database(); 

$database->ModifyUniqueUser(trim($_POST["id"]), trim($_POST["name"]), trim($_POST["lastname"]));

//redirigir a la vista de listar usuarios
header('Location: '.$_SERVER['HTTP_REFERER']); 

?>