<?php

namespace App\Core;

use App\Controller\StaticController;
class Core
{
    private $controller = '\\App\\Controller\\StaticController';
    private $method = 'index';
    private $params = [];

    public function initCore($url)
    {
        if (isset($url['url'])) {
            $arr = explode('/', $url['url']);
            if (count($arr) <= 3) {
                if (isset($arr[0]) && $arr[0] != '') {
                    // Setando Controller
                    $this->controller = "\\App\\Controller\\" . ucfirst($arr[0]) . "Controller";
                    array_shift($arr);
                    if (isset($arr[0]) && $arr[0] != '') {
                        // Setando Metodo a ser chamado
                        $this->method = $arr[0];
                        array_shift($arr);
                        if (isset($arr[0]) && $arr[0] != '') {
                            // Setando parametros
                            $this->params = $arr;
                        }
                    }
                } else {
                    $this->method = 'notFound';
                }
            } else {
                $this->method = 'notFound';
            }
            
            try {
                echo call_user_func(array(new $this->controller, $this->method), $this->params);
            } catch (\Throwable $th) {
                echo call_user_func(array(new StaticController, 'notFound'));
            }
        } else {
            echo call_user_func(array(new StaticController , 'index'), $this->params);
        }
        // echo ("<hr>Controller: {$this->controller}");
        // echo ("<hr>Method: $this->method <hr>Params: ");
        // var_dump($this->params);
    }
}
