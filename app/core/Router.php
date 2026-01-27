<?php
namespace App\Core;

use App\Controllers\StudentController;

class Router
{

    public function run()
    {
       $method = $_SERVER['REQUEST_METHOD'];
       $uri = parse_url($_SERVER['REQUEST_URI'], component: PHP_URL_PATH);

       if ($method == 'GET' && $uri == '/students') {
            require_once './app/controllers/StudentController.php';
             $controllers = new StudentController();
             $controllers->index();
              return;

            
       }

           if ($method == 'GET' && $uri == '/students/create') {
            require_once './app/controllers/StudentController.php';
              $controllers = new StudentController();
             $controllers->create();
              return; }

          http_response_code(404);
            echo '<h1>Page Not Found</h1>';

    }

}

?>