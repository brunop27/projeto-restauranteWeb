<?php

use Models\Config as Mconfig;
use Models\Produto;

require_once('../app/application.php');

$config= new Mconfig();
// $config->save(['name'=>'Estudante Jr','value'=>'Bruno pinheiro']);

all($config->where('value','like','Bruno%'));
function all($model){
    $configs = $model-> all();
    array_walk($configs, function($config){
        echo $config->id." | ".$config->name . " | ".$config->value. "<hr>";
    });
}

// $config->insert(['alteracao_data' => date('Y-m-d H:i:s')]);
// pre($config->insert());
// pre($model->insert(['name'=>'TAXA_SERVICO', 'value'=>'10']));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.1.nome'));
// pre(Configs::getConfig('testes.1.nome'));