<?php
$config = 'kernel/config.php';
$size = filesize($config);

if ($size == 0) 
{
    header("Location: kernel/install/index.php");
}
else
{
	header("Location: modules/login/index.php");
}
?>