<?php
namespace App\Core;

class Router
{

    public function run()
    {
       $method = $_SERVER['REQUEST_METHOD'];
       $uri = parse_url($_SERVER['REQUEST_URI'], component: PHP_URL_PATH);

       if ($method = 'GET' && $uri == '/students') {
              echo '<h1>Menampilkan daftar siswa</h1>';
              return;
       }

          http_response_code(404);
    echo '<h1>Page Not Found</h1>';

    }

}

?>