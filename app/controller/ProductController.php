<?php

namespace App\Controller;

use App\Controller\Twig;
use App\Controller\BrandController;
use App\Controller\CategoryController;
use App\Controller\AdminController;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;

class ProductController extends Twig
{
    public function index($data)
    {
        try {
            echo $this->twig->render('product.twig', ['file' => URL_MAIN . 'public/', 'products' => json_decode($this->read()), 'like' => $data ? json_decode($data) : null]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function select()
    {
        AdminController::wardStatic();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            try {
                $product = new Product();
                $data = json_decode(file_get_contents("php://input"));
                return $data->mult
                    ? json_encode($product->personSelects($data->query))
                    : json_encode($product->personSelect($data->query));
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th->getMessage());
            }
        }
        return Twig::loadJson('bad', 404, 'METHOD ON POST');
    }
    public function buscar($string = null)
    {
        AdminController::wardStatic();
        try {
            if ($string != null) {
                $product = new Product();
                $this->index(json_encode($product->selectLike($string[0])));
            }
        } catch (\Throwable $th) {
            return Twig::loadJson('bad', 404, $th->getMessage());
        }
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
    public function read($id = null)
    {
        AdminController::wardStatic();
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            try {
                $product = new Product();
                return isset($id[0]) ? json_encode($product->read($id[0])[0]) : json_encode($product->read());
            } catch (\Throwable $th) {
                return Twig::loadJson('bad', 404, $th);
            }
        }
    }
    public function delete($id = null)
    {
        AdminController::wardStatic();
        try {
            if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
                if (isset($id)) {
                    $product = new Product();
                    $oldImage = $product->read($id[0])[0];
                    $oldImage =  $oldImage['dirImageShoe'];
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
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
    public function update($id = null)
    {
        AdminController::wardStatic();
        try {
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                if (isset($id) && isset($_POST)) {
                    $product = new Product();

                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $id_category = $_POST['category'];
                    $id_brand = $_POST['brand'];
                    $colors =  $_POST['colorsArray'];
                    $gender = $_POST['radio'];
                    $image = $_FILES['image']['size'] == 0 ? null : $_FILES['image'];

                    $oldImage = $product->read($id[0])[0];
                    $oldImage =  $oldImage['dirImageShoe'];

                    if ($image != null) {
                        $date = new DateTime();
                        $dir = 'img/products/';
                        $image = $dir . md5($date->format('ymdhis') . $image['name']) . "." . pathinfo($image['name'], PATHINFO_EXTENSION);

                        !file_exists($dir) ? mkdir($dir) : '';
                        // $oldImage = $product->read($id[0])[0];
                        // $oldImage =  $oldImage['dirImageShoe'];
                        if (file_exists($oldImage)) {
                            unlink($oldImage);
                        }
                        // return var_dump($_FILES);
                        move_uploaded_file($_FILES['image']['tmp_name'], $image);
                    } else $image = $oldImage;
                    $req = json_encode([
                        $name,
                        $description,
                        $price,
                        $id_category,
                        $id_brand,
                        $colors,
                        $gender,
                        $image,
                    ]);
                    return $product->update($id[0], $req);
                }
                return Twig::loadJson('bad', 404, 'Product not found');
            } else {
                return Twig::loadJson('bad', 404, 'Delete in method POST');
            }
        } catch (\Throwable $th) {
            return Twig::loadJson('bad', 404, $th);
        }
    }
    public function details($id = null)
    {
        if (isset($id)) {
            $ca = new Category('ds');
            $br = new Brand('d');

            $data = json_decode($this->read($id[0]));
            $name = $data->nameShoe;
            $description = $data->descriptionShoe;
            $gender = $data->genderShoe;
            $colors= implode(', ',  json_decode($data->colorsShoe));
            $price= $data->priceShoe;

            $category= $data->idCategory;
            $brand= $data->idBrand;

            $category = $ca->read($category)[0][1];
            $brand = $br->read($brand)[0][1];

            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $dompdf = new DOMPDF($options);

            $dompdf->load_html(
                "
                <head>
                <meta charset='UTF-8'>
            </head>
            <body>
                <style>
                    *{
                        margin: 0;
                        padding: 0;
                        box-sizing: 0;
                    }
                    body{
                        font-family: sans-serif;
                        font-size: 100%;
                    }
                    header{
                        justify-content: space-around;
                        align-items: center;
                        background-color: #ddd;
                        padding: .4rem;
                        width: 100%;
                        text-align: center;
                    }
                    header img{
                        height: 40px;
                        image-rendering: pixelated;
                        width: 50px;
                        float: left;
                    }
                    main{
                        max-width: 960px;
                        width: 100%;
                        margin: 0 auto;
                        overflow: hidden;
                        padding: 4rem 1rem;
                    }
                    main .image{
                        overflow: hidden;
                        width: 200px;
                        border-radius: 8px;
                        box-shadow: 0 2px 4px #3338;
                        height: 200px;
                    }
                    main h2{
                        font-size: 1.8rem;
                    }
                    main img{
                        width: 100%;
                        border-radius: 8px;
                        height: 100%;
                    }
                    main section{
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 1rem;
                        margin: 1rem 0;
                        box-shadow: 0 2px 4px #3338;
                        background-color: #ddd;
                        border-radius: 8px;
                    }
                    main section p{
                        font-size: 1rem;
                        font-weight: 500;
                        line-height: 1.5;
                        margin-top: 5px;
                    }
                    footer{
                        width: 100%;
                        max-height: 30px;
                        background-color: #ddd;
                        padding: .4rem;
                        border-bottom: 2px solid #111;
                        text-align: center;
                        font-size: 1rem;
            
                        box-shadow: 2px 2px 10px #3338;
                    }
                </style>
            
                <header>
                    <h1>Shoes - Detalhes</h1>
                </header>
                <main>
                    <section>
                        <h2>Detalhes produto: {$name}</h2>
                    </section>
                    <section>
                        <div class='container'>
                            <p><strong>Descrição:</strong> {$description}</p>
                            <p><strong>Valor:</strong> R$ {$price}</p>
                            <p><strong>Cores:</strong> {$colors}.</p>
                            <p><strong>Gênero:</strong> {$gender}.</p>
                            <p><strong>Categoria:</strong> {$category}.</p>
                            <p><strong>Marca:</strong> {$brand}.</p>
                        </div>
                    </section>
                </main>
                <footer>
                    <span>Todos os direitos reservados &copy; 2021</span>
                </footer>
            </body>
            </html>
                "
            );
            $dompdf->setPaper('A4', 'portrait'); //portrait

            $dompdf->render();

            $dompdf->stream(
                "Detalhes.pdf",
                array(
                    "Attachment" => false //false=mostra; true=download
                )
            );
        }
    }
}
