<?php
session_start();
session_unset();
session_destroy();

require_once('../includes/startTemplate.inc.php'); 

$smarty->display('../smarty/templates/logout.tpl');
exit();
?>
