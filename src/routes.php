<?php

use MVC\Controllers\UserController;
use MVC\Router;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');

$uri = $_SERVER['REQUEST_URI'];

$router->dispatch($uri);