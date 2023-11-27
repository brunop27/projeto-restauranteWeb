<?php
// Armazena as constante

//Armazena a pasta da aplicação, verificando se a mesma foi definida, se não ela define
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(__DIR__.'/../..'));

// Armazena a URL da aplicação
defined('APPLCATION_URL') || define('APPLICATION_URL','http://restaurante.localhost');

defined('ADMIN_LTE') || define('ADMIN_LTE',APPLICATION_URL.'/adminlte');
?>