<?php

namespace App\Controller;

use App\Controller\Twig;
use App\Controller\AdminController;
use App\Model\Product;
use DateTime;

class ProductController
{
    private $admin;
    public function __construct()
    {
        $this->admin = new AdminController();
    }

    public function create()
    {
        $this->admin->ward();
        try {
            if ($_SERVER['REQUEST_METHOD'] === "POST")
            {
                if(isset($_POST['radio'])){
                    
                    $name = $_POST['productName'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $id_category = $_POST['selectCategory'];
                    $id_brand = $_POST['selectBrand'];
                    $colors =  $_POST['colorsArray'];
                    $gender = $_POST['radio'];
                    $image = $_FILES['image'];
                    $date = new DateTime();
                    $imageName = md5($date->format('ymdhis') . $image['name']) ."." .pathinfo($image['name'],PATHINFO_EXTENSION); 
                    $dir = 'img/products/';
    
                    !file_exists($dir)?mkdir($dir):'';
                    
                    move_uploaded_file($image['tmp_name'], $dir . $imageName); 
                    
                    $product = new Product($name, $description, $colors, $gender, $price,$id_category, $id_brand, $dir . $imageName);
                    
                    // return 'roi';
                    return $product->create();
                }
            }
        } catch (\Throwable $th) {
            throw new \Exception("Error Processing Request : ${th}", 1);
        }
       
      
        return Twig::loadJson('bad', 404, 'METHOD GET NOT FOUND');
    }
    public function read()
    {
        $this->admin->ward();
        if ($_SERVER['REQUEST_METHOD'] === "GET") 
        {
            try {
                $product = new Product();
                return $product->read();
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th);
            }
        } 
    }
}
