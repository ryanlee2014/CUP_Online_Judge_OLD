<?php
$cache_time=10;
require_once('./include/db_info.inc.php');
require_once('./include/cache_start.php');
require_once('./include/setlang.php');
$view_title = "Welcome To Online Judge";
if (!isset($_SESSION['user_id'])) {

    $view_errors = "<a href=newloginpage.php>$MSG_Login</a>";
    require("template/" . $OJ_TEMPLATE . "/error.php");
    exit(0);
//	$_SESSION['user_id']="Guest";
}

require("template/" . $OJ_TEMPLATE . "/tutorial.php");

if(file_exists('./include/cache_end.php'))
    require_once('./include/cache_end.php');
?>