<?php

namespace App\Controller;

use App\Controller\Twig;

class AdminController extends Twig
{
    // echo $this->twig->render('index.php');

    public function index()
    {
        echo $this->twig->render('login.twig');
    }
    public function login()
    {
        echo $this->twig->render('login.twig');
    }
    public function dashboard()
    {
        echo $this->twig->render('./private/dashboard.twig');
    }
}
