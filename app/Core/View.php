<?php
// Essa classe vai gerenciar as views da nossa aplicação

//Variável que muda o nome interno do arquivo podendo ter mais um arquivo e o sistema nao confundir
namespace Core;

class View{
    private $view;
    private $template;
    private $data;
    public function __construct($view,$template = TEMPLATE_DEFAULT, $data = []){
        $this->view = $view;
        $this->template = $template;
        $this->data = $data;
    }

    private function createStringRequireView(){
        $view = preg_replace("(\.view.php$)",'',$this->view);
        $view = str_replace('.','/', $view);
        return VIEWS_PATH."/".$view.".view.php";
    }

    private function createStringRequireTemplate(){
        $template = preg_replace("(\.template.php$)",'',$this->template);
        $template = str_replace('.','/', $template);
        return TEMPLATES_PATH."/".$template.".template.php";
    }

    public function __set($name,$value){
        $this->data[$name] = $value;
    }

    public function __get($name){
        return (isset($this->data[$name]))?$this->data[$name]:null;
    }

    private function getTemplateConfigs(){
        return Configs::getConfig('template');
    }
    //Ação que regarrega a view
    public function show($data = []){
        $data = array_merge($this->data, $data);
        extract($data);
        $template = $this->getTemplateConfigs();
        ob_start();
        require $this->createStringRequireView();
        $view = ob_get_clean(); 
        require $this-> createStringRequireTemplate();
    }
}