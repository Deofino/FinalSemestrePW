<?php

    require_once('../lib/vendor/autoload.php');
    use App\Core\Core;
    $core = new Core;
    $core->initCore($_GET);