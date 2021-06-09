<?php

namespace App\Controller;

use App\Controller\Twig;

class ContactController extends Twig
{
    public function index()
    {
        echo $this->twig->render('contact.twig');
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.twig');
    }
}
