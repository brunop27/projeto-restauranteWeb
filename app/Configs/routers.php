<?php

use Core\Router;

//Rotas do framework
Router::get("/", Controllers\Home::class);
Router::get("/produtos", Controllers\Produtos::class);
Router::get("/produto", Controllers\Produtos::class, 'produto');
Router::get("/produto/{id}/novo", Controllers\Produtos::class, 'produto');
Router::get("/produto/{id}/{nome_usuario}", Controllers\Produtos::class, 'produto');

Router::get("/404", Controllers\ErrorController::class, 'page404');
Router::get("/500", Controllers\ErrorController::class, 'page500');
