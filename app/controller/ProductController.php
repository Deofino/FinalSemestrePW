<?php

namespace App\Controller;

use App\Controller\Twig;

class ProductController extends Twig
{
    public function index()
    {
        echo $this->twig->render('products.php');
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.php');
    }
}
