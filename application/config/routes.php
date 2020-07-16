<?php
error_reporting(0);
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($uri[2] == "")
{
    include(__DIR__.'/../view/contoh_hapus_saja.php');
}