<?php

require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/application/config/routes.php';
use App\Controllers\C_users;

$user = new C_users();
$user->get_all();
$user->get_by_id(1);
$user->update((object)['"name' => "test", "email"=>"test@gmail.com"]);