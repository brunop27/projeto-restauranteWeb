<?php
// Essa classe vai gerenciar as views da nossa aplicação

//Variável que muda o nome interno do arquivo podendo ter mais um arquivo e o sistema nao confundir
namespace Core;

class View{
    private $view;
    private $template;

    public function __construct($view,$template){
        $this->view = $view;
        $this->template = $template;
    }
    //Ação que regarrega a view
    public function show(){
        require $this-> template;
    }
}