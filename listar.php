<?php 

require("db/database.php");
require 'libs/Smarty.class.php';

$database = new Database(); 

$smarty = new Smarty;
 
$smarty->assign("arr", $database->SelectUserData());
 
$smarty->display('listar.tpl');

?>