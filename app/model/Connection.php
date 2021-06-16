<?php

namespace App\Model;

class Connection
{
    public static function getConnection()
    {
        $conn = null;
        try {
            if ($conn == null) {
                $conn = new \PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
            }
            return $conn;
        } catch (\Throwable $th) {
            return \App\Controller\Twig::loadJson("bad", 400, "error connect to database: $th");
        }
    }
}
