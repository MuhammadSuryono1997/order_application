<?php
error_reporting(0);
use App\Controllers\C_users;
use App\Controllers\C_Items;
$uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// var_dump($uri);

$user = new C_users();

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
    if(!$uri[4])
    {
        $view = 'item';
        include(__DIR__.'/../view/index.php');
    }elseif ($uri[4]=="delete")
    {
        // C_Items::delete($uri[5]);
        header('location:http://localhost/illuminate_php/index.php/items');
    }
}
elseif($uri[3]=='form-items')
{
    if(!$uri[4])
    {
        $view = 'form_items';
        include(__DIR__.'/../view/index.php');
    }
    else
    {
        if($uri[4] != 'action')
        {
            $data = C_Items::get_update($uri[4]);
            $view = 'form_items';
            if(count($data)>0)
            {
                $items_name = $data->name;
                $items_description = $data->description;
                $items_price = $data->price;
            }
            include(__DIR__.'/../view/index.php');
        }
        elseif($uri[4]=='action')
        {
            if($_POST['id']=="")
            {
                echo(C_Items::insert((object)['name' => $_POST['name'], 'description' => $_POST['deskripsi'], 'price'=>$_POST['price']]));
                // header('location:http://localhost/illuminate_php/index.php/items');
            }
        }
    }
}
elseif ($uri[3]=='users')
{
    if(!$uri[4])
    {
        $view = 'user';
        include(__DIR__.'/../view/index.php');
    }elseif ($uri[4]=="delete")
    {
        // C_Items::delete($uri[5]);
        header('location:http://localhost/illuminate_php/index.php/users');
    }
}
elseif($uri[3]=='form-users')
{
    if(!$uri[4])
    {
        $view = 'form_users';
        include(__DIR__.'/../view/index.php');
    }
    else
    {
        if($uri[4] != 'action')
        {
            $data = C_users::get_by_id($uri[4]);
            $view = 'form_users';
            if(count($data)>0)
            {
                $items_name = $data->name;
                $items_email= $data->email;
            }
            include(__DIR__.'/../view/index.php');
        }
        elseif($uri[4]=='action')
        {
            if($_POST['id']=="")
            {
                // echo(C_Items::insert((object)['name' => $_POST['name'], 'description' => $_POST['deskripsi'], 'price'=>$_POST['price']]));
                header('location:http://localhost/illuminate_php/index.php/users');
            }
            elseif($_POST['id']!="")
            {
                $users = new C_users();
                echo($users->update((object)['name'=> 'saya','email'=>$_POST['email'],'id'=>$_POST['id']]));
                // header('location:http://localhost/illuminate_php/index.php/users');
            }
        }
    }
}