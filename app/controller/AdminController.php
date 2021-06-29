<?php

namespace App\Controller;
use App\Controller\BrandController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\Twig;
use App\Model\Product;
use Exception;

class AdminController extends Twig
{
    public function index()
    {
        $this->ward();
        header("Location: ".URL_MAIN."public/admin/dashboard");
    }
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = json_decode(file_get_contents("php://input"));
            if(trim($data->email) === trim('admin@admin.com')
            && password_verify($data->password,password_hash('12345678', PASSWORD_DEFAULT)) == 1)
            {
                $name = explode(' ', $data->name);
                $_SESSION['user'] = password_hash($data->email,PASSWORD_DEFAULT);
                $_SESSION['data'] = $name[0];
                return Twig::loadJson('ok',200,"User session created.");
            }else
            {
                return Twig::loadJson('bad',404,"User not found.");
            }
        }
        else
        {
            if(isset($_SESSION['user']) || isset($_SESSION['data'])){
                header("Location: ".URL_MAIN."public/admin/dashboard");
            }else{
                echo $this->twig->render('./login.twig',['file'=>URL_MAIN.'public/']);
            }
        }
        // 
    }
    public function dashboard()
    {
        $this->ward();
        $product = new Product();
        try{
            $avgPrice = $product->personSelect("SELECT AVG(priceShoe) FROM tbshoe");
            $countBrand = $product->personSelect("select count(idBrand),nameBrand from tbshoe inner join tbbrand on tbbrand._id = tbshoe.idBrand group by idBrand");
            $countCate = $product->personSelect("select count(idCategory) as ct, nameCategory from tbshoe inner join tbcategory on tbshoe.idCategory = tbcategory._id GROUP by idCategory order by ct desc");
            $genderA = $product->personSelect("SELECT count(genderShoe),genderShoe FROM `tbshoe` group by genderShoe desc");
            echo $this->twig->render('./private/dashboard.twig',
            ['file'=>URL_MAIN.'public/', 'avgPrice'=>ceil($avgPrice[0]),
            'countBrand'=>$countBrand[1],'countCategory'=>$countCate[1], 'genderA'=>$genderA[1]]);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function insert()
    {
        $this->ward();
        $brand = new BrandController;
        $category = new CategoryController;
        echo $this->twig->render('./private/insert.twig',['file'=>URL_MAIN.'public/','brands'=>json_decode($brand->read()), 'categories'=>json_decode($category->read())]);
    }
    public function delete()
    {
        $this->ward();
        $products = new Product();
        echo $this->twig->render('./private/delete.twig',['file'=>URL_MAIN.'public/','products'=>$products->read()]);
    }
    public function update()
    {
        $this->ward();
        $products = new Product();
        $brand = new BrandController;
        $category = new CategoryController;
        echo $this->twig->render('./private/update.twig',['file'=>URL_MAIN.'public/','products'=>$products->read(),"brands"=>$brand->read(),"categories"=>$category->read()]);
    }

    public function logout(){
        if(isset($_SESSION['user']) && isset($_SESSION['data'])){
            unset($_SESSION['user']);
            unset($_SESSION['data']);
            session_destroy();
        }
        $this->ward();
    }

    public function ward()
    {
        if(!isset($_SESSION['user']) || !isset($_SESSION['data'])){
            header("Location: ".URL_MAIN."public/admin/login");
        }
    }
    public static function wardStatic()
    {
        if(!isset($_SESSION['user']) || !isset($_SESSION['data'])){
            header("Location: ".URL_MAIN."public/admin/login");
        }
    }
}
