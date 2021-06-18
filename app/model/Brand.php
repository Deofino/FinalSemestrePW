<?php

namespace App\Model;

use App\Model\Connection;
use App\Controller\Twig;

class Brand
{
    private $id;
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function create()
    {
        try {
            $stmt = Connection::getConnection()->prepare('INSERT INTO tbbrand values(null,?)');
            if($stmt->execute([$this->name])){
                return Twig::loadJson("ok", 200, "Brand inserted with success");
            }
            return Twig::loadJson("bad", 400, "Brand error to insert");
        } catch (\Throwable $th) {
            return Twig::loadJson("bad", 400, "Brand error to insert: $th");
        }
    }
    public function read()
    {
        try {
            $stmt = Connection::getConnection()->prepare('SELECT * FROM tbbrand');
            if($stmt->execute()){
                return $stmt->fetchAll();
            }
            return Twig::loadJson("bad", 400, "Brand error to read");
        } catch (\Throwable $th) {
            return Twig::loadJson("bad", 400, "Brand error to read: $th");
        }
    }
}
