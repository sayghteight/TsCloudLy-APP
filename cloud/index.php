<?php
/*
 * @package	CPTS3
 * @author	Sayghteight
 */
/*
 *---------------------------------------------------------------
 * Modo aplicación
 *---------------------------------------------------------------
 *
 * This can be set to anything, but default usage is (production):
 *
 *     development
 *     testing
 *     production
 */
	define('ERROR_REPORTING', isset($_SERVER['TS3_ENV']) ? 
	$_SERVER['TS3_ENV'] : 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ERROR_REPORTING)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;
	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
	break;
	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'ERROR_REPORTING is not setup correctly.';
		exit(1); // EXIT_ERROR
}


/*
 *---------------------------------------------------------------
 * Install
 *---------------------------------------------------------------
 *
 */

    $config = 'kernel/database/class.db.php';
    $install = filesize($config);
    if ($install == 0) 
    {
    header("Location: kernel/install/index.php");
    }
    else
    {
	header("Location: login.php");
    }
 
?>