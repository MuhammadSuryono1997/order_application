<?php
error_reporting(0);
use App\Controllers\C_users;
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// var_dump($uri);

$user = new C_users();

if($uri[3] == "login")
{
    $view = 'login';
    include(__DIR__.'/../view/index.php');
}