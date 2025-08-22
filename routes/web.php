<?php
require __DIR__ . '/../app/controllers/HomeController.php';
require __DIR__ . '/../app/controllers/AboutController.php';
require __DIR__ . '/../app/controllers/ProjectsController.php';
require __DIR__ . '/../app/controllers/CVController.php';
require __DIR__ . '/../app/controllers/ContactController.php';

$router = new Router();

$router->get('/',             [HomeController::class, 'index']);
$router->get('/about',        [AboutController::class, 'index']);
$router->get('/projects',     [ProjectsController::class, 'index']);
$router->get('/cv',           [CVController::class, 'index']);
$router->get('/contact',      [ContactController::class, 'index']);
