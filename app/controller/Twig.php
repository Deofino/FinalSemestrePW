<?php

namespace App\Controller;

abstract class Twig
{
    protected $loader;
    protected $twig;

    public function __construct()
    {

        $this->loader = new \Twig\Loader\FilesystemLoader(['../app/view/','../app/view/template','css']);
        $this->twig = new \Twig\Environment($this->loader, [
            'auto_reload'=>true
        ]);
        $this->twig->addGlobal('session', $_SESSION);
    }
}
