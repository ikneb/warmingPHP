<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
//connect with autoloader
require __DIR__ . '/../vendor/autoload.php';

//connect with bd
$objMySQL = new \liw\app\MYSQL();
$mysqli= $objMySQL -> connection_bd();

mb_internal_encoding('UTF-8');


$act = isset ($_GET['act']) ? $_GET['act'] : 'admin';

define('IS_ADMIN', isset($_SESSION['IS_ADMIN'] ));

$styrofoam = new \liw\app\Styrofoam();
$expanded_polystyrene = new \liw\app\ExpandedPolystyrene();
$mineral_wool = new \liw\app\MineralWool();
$customer = new \liw\app\Customer();
$message = new \liw\app\Message();
$password = new \liw\app\Password();

switch ($act) {
    case 'main':
            require('templates/main.php');
        break;

    case 'calc':
        switch ($_POST['material']){
            case  'styrofoam':
                //calculate price warming for styrofoam quadrature
                $price = $styrofoam->price($_POST['quad'],$_POST['thick'],$_POST['density'],$mysqli);
                echo $price;
                break;
            case 'expanded_polystyrene':
                //calculate price warming for expanded_polystyrene quadrature
                $price = $expanded_polystyrene->price($_POST['quad'],$_POST['thick'],$_POST['density'], $mysqli);
                echo $price;
                break;
            case 'mineral_wool':
                //calculate price warming for mineral_wool quadrature
                $price = $mineral_wool->price($_POST['quad'],$_POST['thick'],$_POST['density'], $mysqli);
                echo $price;
                break;
        }
        //insert customer
        $customer->add_customer($_POST['name'], $_POST['number'], $_POST['quad'], $_POST['thick'], $_POST['density'],
            $_POST['material'], $price, $mysqli);
       break;
    case 'message':
        $message->add_message($_POST['name'],$_POST['email'],$_POST['number'],$_POST['text'],$mysqli);
        require('templates/message.php');
        break;

    case 'log_input':
        if($_POST['password']==$password->get_password($mysqli)){
            $_SESSION['IS_ADMIN'] = true;
            header('Location: ?act=admin');

        }else{
        require('templates/notlogin.php');
        }
        break;

    case 'change_password':
        $password->edit_password($_POST['password'], $mysqli);
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
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $page = isset($_GET['page']) ? max(1,intval($_GET['page'])):1;
            $limit = 10;
            $records = array();
            $page_result = $mysqli->query("SELECT COUNT(*) AS cust FROM customer")->fetch_assoc();
            $customers = $page_result['cust'];
            $offset = $customers - ($limit*$page) ;
            $pages = $customers/$limit+1;
            if(($limit*$page)>$customers){
                $offset=0;
                $limit = $customers%$limit;
        }
        $sel = $mysqli->query("SELECT * FROM  customer
        WHERE id ORDER BY id LIMIT $offset, $limit");
        while ($row = $sel->fetch_assoc()){
            $records[]=$row;
        }
        require('templates/admin.php');
        break;
    case 'admin_sms':
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $page = isset($_GET['page']) ? max(1,intval($_GET['page'])):1;
        $limit = 10;
        $records = array();
        $page_result = $mysqli->query("SELECT COUNT(*) AS sms FROM sms")->fetch_assoc();
        $messages = $page_result['sms'];
        $offset = $customers - ($limit*$page) ;
        $pages = $messages/$limit+1;
        if(($limit*$page)>$messages){
            $offset=0;
            $limit = $messages%$limit;
        }
        $sel = $mysqli->query("SELECT * FROM  sms
        WHERE id ORDER BY id LIMIT $offset, $limit");
        while ($row = $sel->fetch_assoc()){
            $records[]=$row;
        }
        require('templates/admin.php');
        break;
    case 'delete-customer':
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $id = intval($_GET['id']);
        $customer->delete_customer($mysqli,$id);
        header('Location: ?act=admin');
        break;
    case 'delete-sms':
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $id = intval($_GET['id']);
        $message->delete_sms($mysqli,$id);
        header('Location: ?act=admin_sms');
        break;

}