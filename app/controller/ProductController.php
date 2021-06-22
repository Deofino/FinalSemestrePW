<?php

namespace App\Controller;

use App\Controller\Twig;
use App\Controller\AdminController;

class CategoryController
{
    private $admin;
    public function __construct()
    {
        $this->admin = new AdminController();
    }

    public function create()
    {
        $this->admin->ward();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = json_decode(file_get_contents("php://input"));
            if(isset($data)){
                var_dump(json_encode($data));
            }
        }
        return Twig::loadJson('bad', 404, 'METHOD GET NOT FOUND');
    }
    public function read()
    {
        $this->admin->ward();
        if ($_SERVER['REQUEST_METHOD'] === "GET") 
        {
            
        } 
    }
}
