<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

$router = new \ProjetTLI\Core\Router();

require __DIR__.'/../src/Resources/conf/routes.php';

$router->run();
