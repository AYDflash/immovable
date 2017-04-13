<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', __DIR__);

require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');


$router = new Router();
$router->run();
