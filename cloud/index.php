<?php
require_once 'kernel/Router/router.class.php';
$config = 'kernel/database/class.db.php';
$size = filesize($config);

if ($size == 0) 
{
    header("Location: kernel/install/index.php");
}
else
{
	// header("Location: modules/login/index.php");
	header ("Location : index.php?p=login");
}

?>