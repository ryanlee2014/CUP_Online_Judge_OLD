<?php
$cache_time=10;
require_once('./include/db_info.inc.php');
//require_once('./include/cache_start.php');
require_once('./include/setlang.php');
require("template/" . $OJ_TEMPLATE . "/fame.php");

if(file_exists('./include/cache_end.php'))
    require_once('./include/cache_end.php');
?>