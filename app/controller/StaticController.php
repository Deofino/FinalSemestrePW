<?php

namespace App\Controller;

use App\Controller\Twig;

class StaticController extends Twig
{

    public function index()
    {

        echo $this->twig->render('index.php');
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.php');
    }
}
