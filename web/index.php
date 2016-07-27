<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
//connect with autoloader
require __DIR__ . '/../vendor/autoload.php';

//connect with bd
$objMySQL = new \liw\app\MYSQL();
$mysqli= $objMySQL -> connection_bd();

mb_internal_encoding('UTF-8');

$act = isset ($_GET['act']) ? $_GET['act'] : 'main';

if(isset($_GET['page']))$act = 'admin';
else if(isset($_GET['page_sms']))$act ='admin_sms';

define('IS_ADMIN', isset($_SESSION['IS_ADMIN'] ));

switch ($act) {
    case 'main':
            require('templates/main.php');
        break;

    case 'calc':
        switch ($_POST['material']){
            case  'styrofoam':
                //calculate price warming for styrofoam quadrature
                $styrofoam = new \liw\app\Styrofoam($mysqli);
                $price = $styrofoam->price();
                echo $price;
                break;
            case 'expanded_polystyrene':
                //calculate price warming for expanded_polystyrene quadrature
                $expanded_polystyrene = new \liw\app\ExpandedPolystyrene($mysqli);
                $price = $expanded_polystyrene->price();
                echo $price;
                break;
            case 'mineral_wool':
                //calculate price warming for mineral_wool quadrature
                $mineral_wool = new \liw\app\MineralWool($mysqli);
                $price = $mineral_wool->price();
                echo $price;
                break;
        }
        //insert customer
        $customer = new \liw\app\Customer($mysqli);
        $customer->add_customer($price);
       break;
    case 'message':
        $message = new \liw\app\Message($mysqli);
        $message->add_message();
        require('templates/message.php');
        break;

    case 'log_input':
        $password = new \liw\app\Password($mysqli);
        if($_POST['password']==$password->get_password()){
            $_SESSION['IS_ADMIN'] = true;
            header('Location: ?act=admin');
        }else{
        require ('templates/notlogin.php');
        }
        break;

    case 'change_password':
        $password = new \liw\app\Password($mysqli);
        $password->edit_password();
        print_r($_POST['password']);
        break;

    case 'logout':
        unset($_SESSION['IS_ADMIN']);
        header('Location: ?act=main');
        break;

    case 'about':
        require('templates/about.php');
        break;

    case 'gallery':
        require('templates/gallery.php');
        break;

    case 'contact':
        require('templates/contact.php');
        break;

    case 'login':
        require('templates/login.php');
        break;

    case 'admin':
        $customer = new \liw\app\Customer($mysqli);
        $records=$customer->get_all_customer();
        require('templates/admin.php');
        break;
    case 'admin_sms':
        $message = new \liw\app\Message($mysqli);
        $records=$message->get_all_message();
        require('templates/admin.php');
        break;
    case 'delete-customer':
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $id = intval($_GET['id']);
        $customer = new \liw\app\Customer($mysqli);
        $customer->delete_customer($id);
        header('Location: ?act=admin');
        break;
    case 'delete-sms':
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $id = intval($_GET['id']);
        $message = new \liw\app\Message($mysqli);
        $message->delete_sms($id);
        header('Location: ?act=admin_sms');
        break;

}