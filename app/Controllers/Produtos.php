<?php

namespace Controllers;
use Core\Controller;
use Core\View;

class Produtos extends Controller {
    public function index() {   
        $view = new View('produtos.lista');
        $view->nome = 'x-salada';
        $view->valor= 55.50;
        $view->show();
    }

    public function produto($id = 0) {
        $view = new View('produtos.item');
        $view->nome = 'x-salada';
        $view->valor = 22.50;
        $view->id = $id;
        $view->show();
    }
}