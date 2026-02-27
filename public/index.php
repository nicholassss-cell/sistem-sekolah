<?php
require_once '../app/core/Router.php';
use App\Core\Router;

$router = new Router();

$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('POST', '/students/{id}', 'StudentController', 'show');


$router->run();

?>