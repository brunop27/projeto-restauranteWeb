<?php

use Models\Config as Mconfig;
use Models\Produto;

require_once('../app/application.php');

$model = new Mconfig();
pre($model->all());
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.1.nome'));
// pre(Configs::getConfig('testes.1.nome'));