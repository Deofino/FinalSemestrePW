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
            'cache' => '../app/view/cache',
            'auto_reload'=>true
        ]);
        $this->twig->addGlobal('session', $_SESSION);
        $this->twig->addGlobal('MAIN_URL', URL_MAIN);
    }

    public static function loadJson($status,$status_code, $message)
    {
        return json_encode([
            "status"=>$status,
            "status_code"=>$status_code,
            "message"=>$message
        ]);
    }

}

