<?php
error_reporting(0);
use App\Controllers\C_users;
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


$user = new C_users();

if($uri[2] == "")
{
    var_dump($user->get_all());
    // include(__DIR__.'/../view/contoh_hapus_saja.php');
}