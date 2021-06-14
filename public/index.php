<?php

    require_once('../lib/vendor/autoload.php');
    session_start();
    use App\Core\Core;
    $core = new Core;
    $core->initCore($_GET);