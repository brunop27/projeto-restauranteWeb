<?php

namespace Controllers;
// use Core\Styles;
// use Core\Scripts;
use Core\Controller;
use Core\View;
class ErrorController extends Controller{
    public function page404(){
        $view = new View("page404", "blank");
        $view->setTitle("Erro 404");
        // Styles::addStyle("section{color: black;}");
        //Scripts::addScript("alert('Testando')");
        $view->show();
    }
    
    public function page500(){
        $view = new View ("page500","blank");
        $view->setTitle("Erro 500");
        $view->show();

    }
}