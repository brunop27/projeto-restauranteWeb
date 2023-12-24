<?php

namespace Controllers;
use Core\Styles;
use Core\Controller;
use Core\View;
class ErrorController extends Controller{
    public function Page404(){
        $view = new View("page404", "blank");
        $view->setTitle("Erro 404");
        // Styles::addStyle("body{background-color:#808080;color: white;}");
        $view->show();
    }
    
    public function Page500(){
        $view = new View ("page500","blank");
        $view->setTitle("Erro 500");
        $view->show();

    }
}