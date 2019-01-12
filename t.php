<?php
require_once('./include/db_info.inc.php');
echo date_format(date_create(),"Y-m-d H:i:s");

//print_r($_SERVER);
//$user_mysql="2016011253";
//$sql="UPDATE `users` SET `solved`='".strval($AC)."',`submit`='".strval($Submit)."' WHERE `user_id`='".$user_mysql."'";
//$result = $database->count("users","*");
//echo var_dump($result);
//echo var_dump($database->error());
?>