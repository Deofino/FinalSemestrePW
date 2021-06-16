<?php
    namespace App\Controller;
    use App\Controller\Twig;
    use App\Model\Brand;
    use App\Controller\AdminController;
class BrandController
    {
        private $admin;
        public function __construct()
        {
            $this->admin = new AdminController();
        }

        public function create()
        {
            $this->admin->ward();
            if($_SERVER['REQUEST_METHOD']==="POST")
            {
                try {
                    $data = json_decode(file_get_contents('php://input'));
                    $brand = new Brand($data->brandName);
                    return $brand->create();
                } catch (\Throwable $th) {
                    return Twig::loadJson('bad', 404,$th);           
                }
            }
            return Twig::loadJson('bad', 404,'METHOD GET NOT FOUND');           
        }
    }