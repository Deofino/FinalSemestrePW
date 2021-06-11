<?php

namespace App\Controller;

use App\Controller\Twig;

class AdminController extends Twig
{
    public function index()
    {
        $this->render();
    }
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = json_decode(file_get_contents("php://input"));
            var_dump($data);
        }
        else
        {
            return json_encode([
                "status"=>'bad',
                "status_code"=>400,
                "message"=>"Get function in 'admin/login' not found."
            ]);
        }
        // 
    }
    public function dashboard()
    {
        $this->render();
    }

    private function render()
    {
        session_start();
        if(isset($_SESSION['user'])){
            echo $this->twig->render('./private/dashboard.twig');
        }else{
            echo $this->twig->render('login.twig');
        }
    } 
}
