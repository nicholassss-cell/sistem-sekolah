<?php

namespace App\Core;
require_once '../app/config/app.php';

class Database

{

protected $connection;

public function _construct()
{

    $this->connection = mysqli_connect(
        DB_HOST,
        DB_USER,
        DB_PASS,
        DB_NAME
    );

    if(!$this->connection) {
        die('Error to connect database');
    }


}




}

?>