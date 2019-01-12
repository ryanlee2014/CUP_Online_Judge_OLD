<?php
$cache_time=10;
require_once('./include/db_info.inc.php');
require_once('./include/cache_start.php');
require_once('./include/setlang.php');
require_once('./closed.php');
if (!isset($_SESSION['user_id'])) {
require("template/".$OJ_TEMPLATE."/need_login.php");
    exit(0);
//	$_SESSION['user_id']="Guest";
}
    require("template/" . $OJ_TEMPLATE . "/whiteboard.php");
if(file_exists('./include/cache_end.php'))
    require_once('./include/cache_end.php');
?>