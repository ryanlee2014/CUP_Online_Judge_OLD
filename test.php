<?php
$OJ_CACHE_SHARE = false;
require_once('./include/db_info.inc.php');
require_once('./include/setlang.php');
require_once('./closed.php');
// require_once('./include/cache_start.php');
if (!isset($_SESSION['user_id'])) {

    require("template/" . $OJ_TEMPLATE . "/need_login.php");
    exit(0);
}
require_once("./template/semantic-ui/newcontest.php");
?>