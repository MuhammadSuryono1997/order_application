<?php

require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/application/config/routes.php';
<<<<<<< HEAD
use App\Controllers\C_users;

$user = new C_users();
$user->get_all();
$user->get_by_id(1);
$user->update((object)['"name' => "test", "email"=>"test@gmail.com"]);
=======

>>>>>>> fec548b737ca0cdfd3421b12c1e12b4a1f78a632
