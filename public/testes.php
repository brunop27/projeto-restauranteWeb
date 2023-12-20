<?php

require_once('../app/application.php');
use Models\Config as Mconfig;
// use Models\Produto;


pre((new Mconfig())->all());
// $model = new Produto(1);

// $model->save(['name'=>'Root_User','value'=>'Bruno']);
// $model->delete();

// $model->valor_un = 10;
// $model->save();

// pre($model->getData());
// // all($model);

// function all($model){
//     $configs = $model-> all();
//     array_walk($configs, function($config){
//         echo $config->id." | ".$config->nome . " | ".$config->valor_un. "<hr>";
//     });
// }

// $config->insert(['alteracao_data' => date('Y-m-d H:i:s')]);
// pre($config->insert());
// pre($model->insert(['name'=>'TAXA_SERVICO', 'value'=>'10']));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.1.nome'));
// pre(Configs::getConfig('testes.1.nome'));