<?php

use Models\Config as Mconfig;
use Models\Produto;

require_once('../app/application.php');

$config= new Mconfig();
$config->name = 'HELP_EMAIL';
$config->VALUE = 'help@nossaempresa.com';

$config->insert(['alteracao_data' => date('Y-m-d H:i:s')]);
// pre($config->insert());
// pre($model->insert(['name'=>'TAXA_SERVICO', 'value'=>'10']));
pre($config->all());
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.1.nome'));
// pre(Configs::getConfig('testes.1.nome'));