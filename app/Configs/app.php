<?php

//Testa qual a situação do sistema
defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'development');
// Armazena a URL da aplicação
defined('APPLICATION_URL') || define('APPLICATION_URL','http://localhost/');
//Arquivos de template
defined('ADMIN_LTE') || define('ADMIN_LTE',APPLICATION_URL.'/adminlte');
//Template default
defined('TEMPLATE_DEFAULT') || define('TEMPLATE_DEFAULT', 'main');

defined('APPLICATION_NAME') || define('APPLICATION_NAME','sistema');

