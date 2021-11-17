<?php 

require_once("/application/core/libs.php"); 
require_once("/application/core/router.php");
$router = new Router;
$router->getModel();
$router->getMethod();
$router->getRout();
