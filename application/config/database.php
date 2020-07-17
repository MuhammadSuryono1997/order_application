<?php
// require __DIR__.'/../../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;


$db = new Capsule();

$db->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'db_orders',
    'username'  => 'yono',
    'password'  => 'MamangSekayu.97',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$db->setEventDispatcher(new Dispatcher(new Container()));

$db->setAsGlobal();
$db->bootEloquent();