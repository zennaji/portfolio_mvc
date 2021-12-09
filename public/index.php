<?php
require '../Modules/Project.php';
require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "ZE - Portfolio";
$titleSuffix = "";

switch ($params[1]) {
        case 'projects':
            $titleSuffix = ' | Projects';
            $project = getProject();
            include_once "../Templates/projects.php";
        break;

        
        case 'brpfl':
            $titleSuffix = ' | Beroeps Profile';
            include_once "../Templates/brpfl.html";
            break;
        case 'inloggen':
            $titleSuffix = ' | inloggen';
            include_once "../Templates/inloggen.php";
            break;
        case 'login_success':
            $titleSuffix = ' | login_success';
            include_once "../Templates/login_success.php";
            break;
        case 'uitloggen':
            $titleSuffix = ' | uitloggen';
            include_once "../Templates/uitloggen.php";
            break;
        case 'dashboard':
            $titleSuffix = ' | dashboard';
            include_once "../Templates/dashboard.php";
            break;
            
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
