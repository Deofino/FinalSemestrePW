<?php

namespace App\Controller;

use App\Controller\Twig;

class ProductController extends Twig
{
    public function index()
    {
        echo $this->twig->render('products.twig');
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.twig');
    }
}
