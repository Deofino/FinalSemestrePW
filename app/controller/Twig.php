<?php

namespace App\Controller;

abstract class Twig
{
    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader(['../app/view/','../app/view/template','../app/view/private']);
        $this->twig = new \Twig\Environment($this->loader, [
            'auto_reload'=>true
        ]);
    }
}
