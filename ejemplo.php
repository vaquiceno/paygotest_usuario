<?php 

require 'libs/Smarty.class.php';
 
$smarty = new Smarty;
 
$smarty->assign("page_title", "Hello PHPGang!!");
$smarty->assign("page_content", "This is PHPGang Smarty template demo content");
 
$smarty->display('ek.tpl');

?>
