<?php 

require("db/database.php");
require 'libs/Smarty.class.php';

//numero de registros por pagina
$nreg = 4;

$database = new Database();

//paginas totales a mostrar
$npg = ceil($database->GetLengthUser()/$nreg);
$npg = ($npg != 0) ? $npg : 1;

//pagina a ser mostrada
$page = (isset($_GET["page"]) && is_numeric($_GET["page"])) ? $_GET["page"] : 1;
$page = ($page > $npg) ? $npg : $page;

$smarty = new Smarty;
 
$smarty->assign("arr", $database->SelectUserData($page, $nreg));

$smarty->assign("pg", $page);

$smarty->assign("npg", $npg);
 
$smarty->display('listar.tpl');

?>