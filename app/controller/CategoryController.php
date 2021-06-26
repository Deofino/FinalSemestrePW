<?php

namespace App\Controller;

use App\Controller\Twig;
use App\Model\Category;
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
            try {
                $data = json_decode(file_get_contents('php://input'));
                $category = new Category($data->categoryName);
                return $category->create();
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th);
            }
        }
        return Twig::loadJson('bad', 404, 'METHOD GET NOT FOUND');
    }
    public function read($id=null)
    {
        $this->admin->ward();
        if ($_SERVER['REQUEST_METHOD'] === "GET") 
        {
            try {
                $category = new Category('Casual');
                return isset($id[0])?json_encode($category->read($id[0])):json_encode($category->read());
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th);
            }
        } 
    }
}
