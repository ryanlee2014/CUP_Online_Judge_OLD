<?php
  require_once("include/db_info.inc.php");
//  @session_start();
  require_once("include/my_func.inc.php");
  
//	echo var_dump($_SESSION["csrf_keys"]);
  
?><input type="hidden" name="csrf" value="<?php echo $token?>" class="<?php echo in_array($token,$_SESSION['csrf_keys'])?>">
