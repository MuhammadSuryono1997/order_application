<?php
error_reporting(0);
session_start();

// use ___PHPSTORM_HELPERS\object;
use App\Controllers\C_users;
use App\Controllers\C_Items;

$user = new C_users();
$item = new C_Items();
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri[3] == "login") {
    $view = 'login';
    include(__DIR__ . '/../view/index.php');
} elseif ($uri[3] == "dashboard") {
    $view = 'dashboard';
    include(__DIR__ . '/../view/index.php');
} elseif ($uri[3] == "items") {
    if (!$uri[4]) {
        $view = 'item';
        include(__DIR__ . '/../view/index.php');
    } elseif ($uri[4] == "delete") {
        $item->delete($uri[5]);
        header('location:http://localhost/illuminate_php/index.php/items');
    }
} elseif ($uri[3] == 'form-items') {
    if (!$uri[4]) {
        $view = 'form_items';
        include(__DIR__ . '/../view/index.php');
    } else {
        if ($uri[4] != 'action') {
            $data = $item->get_update($uri[4]);
            $view = 'form_items';
            if (count($data) > 0) {
                $items_name = $data->name;
                $items_description = $data->description;
                $items_price = $data->price;
            }
            include(__DIR__ . '/../view/index.php');
        } elseif ($uri[4] == 'action') {
            if ($_POST['id'] == "") {
                $item->insert((object)['name' => $_POST['name'], 'description' => $_POST['deskripsi'], 'price' => $_POST['price']]);
                header('location:http://localhost/illuminate_php/index.php/items');
            }elseif($_POST['id'] != ""){
                $item->update((object)['name' => $_POST['name'], 'description' => $_POST['deskripsi'], 'price' => $_POST['price'], 'id'=>$_POST['id']]);
                header('location:http://localhost/illuminate_php/index.php/items');
            }
        }
    }
} elseif ($uri[3] == 'users') {
    if (!$uri[4]) {
        $view = 'user';
        include(__DIR__ . '/../view/index.php');
    } elseif (isset($uri[4]) == "delete") {
        $user->delete($uri[5]);
        header('location:http://localhost/illuminate_php/index.php/users');
    }
} elseif ($uri[3] == 'form-users') {
    if (!$uri[4]) {
        $view = 'form_users';
        include(__DIR__ . '/../view/index.php');
    } else {
        if ($uri[4] != 'action') {
            $data = $user->get_by_id($uri[4]);
            $view = 'form_users';
            if (count($data) > 0) {
                $items_name = $data->name;
                $items_email = $data->email;
            }
            include(__DIR__ . '/../view/index.php');
        } elseif ($uri[4] == 'action') {
            if ($_POST['id'] == "") {
                $user = new C_users();
                $user->insert((object)['name' => $_POST['name'], 'email' => $_POST['email']]);
                header('location:http://localhost/illuminate_php/index.php/users');
            } elseif ($_POST['id'] != "") {
                $users = new C_users();
                $users->update((object)['name' => $_POST['name'], 'email' => $_POST['email'], 'id' => $_POST['id']]);
                header('location:http://localhost/illuminate_php/index.php/users');
            }
        }
    }
} elseif ($uri[3] == 'orders') 
{
    $id_customer = "kode".time();
    $id_customer = hash('md5', $id_customer);
    if($uri[4]=="generate-kode")
    {
        header('location:http://localhost/illuminate_php/index.php/orders/'.$id_customer);
    }
    $view = 'orders';
    $data = $item->get_all();
    $user = $user->get_all();
    include(__DIR__ . '/../view/index.php');
}
