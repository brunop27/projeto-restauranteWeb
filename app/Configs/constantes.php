<?php
// Armazena as constante

//Armazena a pasta da aplicação, verificando se a mesma foi definida, se não ela define
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(__DIR__.'/../..'));

// Armazena a URL da aplicação
defined('APPLCATION_URL') || define('APPLICATION_URL','http://restaurante.localhost');

defined('ADMIN_LTE') || define('ADMIN_LTE',APPLICATION_URL.'/adminlte');

defined('APP_PATH') || define('APP_PATH', APPLICATION_PATH.'/app');
defined('VIEWS_PATH') || define('VIEWS_PATH', APP_PATH.'/Views');
defined('TEMPLATES_PATH') || define('TEMPLATES_PATH', APP_PATH.'/Templates');

defined('TEMPLATE_DEFAULT') || define('TEMPLATE_DEFAULT', 'MAIN');
defined('COMPOSER_PATH') || define('COMPOSER_PATH', APPLICATION_PATH."/vendor");


?>