<?php

namespace App\Controller;

use App\Controller\Twig;
use App\Controller\AdminController;
use App\Model\Product;
use DateTime;

class ProductController extends Twig
{
    public function index()
    {
        echo $this->twig->render('product.twig', ['file' => URL_MAIN . 'public/']);
    }
    public function create()
    {
        AdminController::wardStatic();
        try {
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                if (isset($_POST['radio'])) {

                    $name = $_POST['productName'];
                    $description = $_POST['description'];
                    $price = explode('R$ ', $_POST['price'])[1];
                    $id_category = $_POST['selectCategory'];
                    $id_brand = $_POST['selectBrand'];
                    $colors =  $_POST['colorsArray'];
                    $gender = $_POST['radio'];
                    $image = $_FILES['image'];
                    $date = new DateTime();
                    $imageName = md5($date->format('ymdhis') . $image['name']) . "." . pathinfo($image['name'], PATHINFO_EXTENSION);
                    $dir = 'img/products/';

                    !file_exists($dir) ? mkdir($dir) : '';

                    move_uploaded_file($image['tmp_name'], $dir . $imageName);

                    $product = new Product($name, $description, $colors, $gender, $price, $id_category, $id_brand, $dir . $imageName);

                    // return 'roi';
                    return $product->create();
                }
            }
        } catch (\Throwable $th) {
            throw new \Exception("Error Processing Request : ${th}", 1);
        }


        return Twig::loadJson('bad', 404, 'METHOD GET NOT FOUND');
    }
    public function read($id=null)
    {
        AdminController::wardStatic();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            try {
                $product = new Product();
                return isset($id[0])?json_encode($product->read($id[0])[0]):json_encode($product->read());
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th);
            }
        }
    }
    public function delete($id)
    {
        AdminController::wardStatic();
        try {
            if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
                if (isset($id)) {
                    $product = new Product();
                    return $product->delete($id[0]);
                }
                return Twig::loadJson('bad', 404, 'Product not found');
            } else {
                return Twig::loadJson('bad', 404, 'Delete in method DELETE');
            }
        } catch (\Throwable $th) {
            return Twig::loadJson('bad', 404, $th);
        }
    }
}
