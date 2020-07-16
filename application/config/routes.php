<?php
error_reporting(0);
session_start();
use App\Controllers\C_users;

$user = new C_users();
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($uri[3] == "login")
{
    $view = 'login';
    include(__DIR__.'/../view/index.php');
}elseif ($uri[3] == "dashboard") 
{
    $view = 'dashboard';
    include(__DIR__.'/../view/index.php');
}elseif ($uri[3] == "items") 
{
    $view = 'item';
    include(__DIR__.'/../view/index.php');
}