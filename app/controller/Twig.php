<?php

namespace App\Controller;

abstract class Twig
{
    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('../app/view/');
        $this->twig = new \Twig\Environment($this->loader, [
            'cache' => '/path/to/compilation_cache',
        ]);
    }
}
