<?php



$page = $_GET['p'];

if ($page == "")
{
    include('modules/login/index.php');
}

switch($page)
{    
    case "login":
        include('modules/login/index.php');
        break;

    default:
        @include('application/pages/404.html');
}


