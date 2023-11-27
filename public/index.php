<?php

require_once('../app/application.php');
use Core\View;

$tela = new View('','../app/Templates/main.php');
$tela->show();

?>