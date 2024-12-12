<?php

session_start();

require_once './vendor/autoload.php';
require_once './App/Config/Config.php';

use Autoload\Class\Router\Router;

$useRouter = new Router($_SERVER['REQUEST_URI']);

$routerPath = $useRouter->router();

$file = './App/'.$routerPath.'.php';

if(!empty($routerPath)){
    if(file_exists($file)){
        require_once $file;
    }else{
        require_once './App/Page/Error/404Error.php';
    }
}else{
    require_once './App/Page/Site/MainSitePage.php';
}