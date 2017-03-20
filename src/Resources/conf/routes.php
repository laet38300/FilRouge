<?php

use ProjetTLI\Controller\IndexController;

/** Home */
$router->get('/', IndexController::class.'@index');
$router->get('/test', IndexController::class.'@test');
