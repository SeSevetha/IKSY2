<?php
//startTemplate.inc.php
/*
$ROOT_DIR='/var/www/html/iksy05/Projekt10';
require_once("$ROOT_DIR/klassen/smarty/libs/Smarty.class.php");
$smarty=new Smarty();
$smarty->setTemplateDir("$ROOT_DIR/smarty/templates/");
$smarty->setCompileDir("$ROOT_DIR/smarty/templates_c/");
$smarty->setConfigDir("$ROOT_DIR/smarty/configs/");
$smarty->setCacheDir("$ROOT_DIR/smarty/cache/");
*/

require_once(__DIR__ . '/../klassen/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/../smarty/templates/');
$smarty->setCompileDir(__DIR__ . '/../smarty/templates_c/');
$smarty->setConfigDir(__DIR__ . '/../smarty/configs/');
$smarty->setCacheDir(__DIR__ . '/../smarty/cache/');


?>
