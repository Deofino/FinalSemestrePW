<?php

namespace App\Controller;

use App\Controller\Twig;

class ProductController extends Twig
{
    public function index()
    {
        echo $this->twig->render('products.twig',['file'=>URL_MAIN.'public/']);
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.twig',['file'=>URL_MAIN.'public/']);
    }
}
