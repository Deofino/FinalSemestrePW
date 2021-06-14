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
            if(trim($data->email) === trim('admin@admin.com')
            && password_verify($data->password,password_hash('12345678', PASSWORD_DEFAULT)) == 1)
            {
            session_start();
            $_SESSION['user'] = password_hash($data->email,PASSWORD_DEFAULT);
            $_SESSION['data'] = $data;
            return json_encode([
                "status"=>'ok',
                "status_code"=>'200',
                "message"=>'user session created',
            ]);  
            }else
            {
                return json_encode([
                    "status"=>'bad',
                    "status_code"=>404,
                    "message"=>"User not found."
                ]);
            }
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
        if(isset($_SESSION['user']) && isset($_SESSION['data'])){
            echo $this->twig->render('./private/dashboard.twig',['user'=>$_SESSION['user'],'data'=>$_SESSION['data']]);
        }else{
            echo $this->twig->render('login.twig');
        }
    } 
}
