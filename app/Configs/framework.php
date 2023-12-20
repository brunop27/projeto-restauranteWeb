<?php
// Armazena as constante

//Armazena a pasta da aplicação, verificando se a mesma foi definida, se não ela define
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(__DIR__.'/../..'));
//Pasta do projeto, onde se localiza "Tudo" gerenciada pelo framework
defined('APP_PATH') || define('APP_PATH', APPLICATION_PATH.'/app');
defined('VIEWS_PATH') || define('VIEWS_PATH', APP_PATH.'/Views');
defined('TEMPLATES_PATH') || define('TEMPLATES_PATH', APP_PATH.'/Templates');
//Onde fica os repositorios no computador/projeto
defined('COMPOSER_PATH') || define('COMPOSER_PATH', APPLICATION_PATH."/vendor");
defined('CONFIGS_PATH') || define('CONFIGS_PATH', APP_PATH."/Configs");
defined('CONFIGS_DB') || define('CONFIGS_DB', 'config');


?>