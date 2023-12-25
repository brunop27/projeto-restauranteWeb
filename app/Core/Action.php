<?php

namespace Core;

class Action{
    private $router;

    public function __construct($controller = null, $action = 'index', $method = 'GET', $parameters = []){
        if(!empty($controller)){
            $this->router = Router::getRouterByController($controller, $action, $method, $parameters);
        }
    }
    //Verifica se tem uma rota, se tiver, retorna url solicitada
    public function getUrl(){
        if($this->router){
            return APPLICATION_URL . "/" .$this->router->getUrl();
        }
        throw new \Exception('Action sem rota não gera URL');
    }

    public function __toString(){
        return $this->getUrl();
    }

    public static function createActionByUrl($url){
        $router = Router::getRouterByUrl($url);
        $action = new Action();
        $action->router = $router;
        return $action;
    }

    public function run(){
        if($this->router){
            $controller = $this->router->getController();
            call_user_func_array(
                [
                    new $controller,
                    $this->router->getAction()
                ],
                array_values($this->router->getParameters()));
                return;
        }
        if(defined('PAGE_404')){
            $controller = PAGE_404;
            $action = 'index';
            if(is_array($controller)){
                $controller = array_values($controller);
                $action = $controller[1];
                $controller = $controller[0];
            }
            //Redireciona para a pagina404 mudando o que foi digitado no link
            $action = new Action($controller, $action);
            $action->redirect();
            //Redireciona para a pagina404 mantendo o que foi digitado no link
            // call_user_func_array(
            //     [
            //             new $controller,
            //             $action
            //         ],
            //         []);
            return;
        }

        die('ERROR 404 - NOT FOUND');
    }

    public function redirect(){
        header('location:' . $this);
        die();
    }
}
