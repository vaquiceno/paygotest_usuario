<?php

if(!isset($_POST["submit"])) {
	header('Location: /paygotest_usuario');
}
if(!isset($_POST["number"])) {
	die("No estableció el parametro Número de Registros");
}
//reconocer si es un .csv
$type = explode(".",$_FILES['file']['name']);
if(strtolower(end($type)) !== 'csv'){
	die("El archivo que ha subido no es un .csv");
}
$target_file = "../csv/file.csv";
if (!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    die("Lo sentimos, ha ocurrido un error al subir su archivo .csv");
}    
if (($gestor = fopen($target_file, "r")) == FALSE) {
	die("Lo sentimos, ha ocurrido un error al procesar su archivo .csv");
}	
$arr_name = array();
$arr_lastname = array();
$arr = array();	
while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
	$name = trim($datos[0]);
	$lastname = trim($datos[1]);
	if ($name !== "" && $lastname !== ""){
		array_push($arr_name, $datos[0]);
		array_push($arr_lastname, $datos[1]);
		array_push($arr, $datos);		
	}
}
fclose($gestor);				 
//ordenamiento natural sobre el campo nombre segun la opcion elegida
$sort = ($_POST["option"] === "D") ? SORT_DESC : SORT_ASC;
array_multisort($arr_name, $sort, SORT_NATURAL, $arr_lastname, $arr);

require("database.php");
$database = new Database(); 

//eliminar datos de la tabla user
$database->DeleteUserData();

//reset autoincrement tabla user
$database->ResetAutoIncrement();

//insertar en la tabla user
$number = $_POST["number"];
$database->InsertUserDataCSV($arr,$number);	

//redirigir a la vista de listar usuarios
header("Location: /paygotest_usuario/listar.php");

?>