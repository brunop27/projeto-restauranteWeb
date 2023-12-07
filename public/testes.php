<?php

require_once('../app/application.php');
use Core\Connection;

$conn = Connection::getInstance();

$stm = $conn->prepare('SHOW TABLES');
$stm->execute();
pre($stm->fetchAll());

// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.0.id'));
// pre(Configs::getConfig('testes.1.nome'));
// pre(Configs::getConfig('testes.1.nome'));