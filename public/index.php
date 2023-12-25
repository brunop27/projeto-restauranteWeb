<?php

require_once('../app/application.php');
use Core\Request;
// // use Controllers\Home;
// // use Core\Router;
// use Core\Action;
Request::getInstance()->getAction()->run();
// // $controller = new Home();
// // $controller -> index();

// $url = '/';
// if  (isset($_GET['url'])) {
//     $url = $_GET['url'];
// }

// Action::createActionByUrl($url)->run();




// // $router = Router::getRouterByController(\Controllers\Produtos::class, 'produto','GET',[5,'água mineral']);

// // if($router){
// //     pre($router->getUrl());
// // }

// // pre($router);