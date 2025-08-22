<?php
require __DIR__ . '/../framework/Router.php';
require __DIR__ . '/../framework/Database.php';

// Cargar controladores
require __DIR__ . '/../routes/web.php';

$router->run();
