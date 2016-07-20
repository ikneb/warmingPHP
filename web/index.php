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

define('IS_ADMIN', isset($_SESSION['IS_ADMIN'] ));
$styrofoam = new \liw\app\Styrofoam();

switch ($act) {
    case 'calc':
        $price = $styrofoam->price($_POST['quad'],$_POST['thick'],$_POST['density'],$mysqli);
        $objMySQL->add_customer($_POST['name'], $_POST['number'], $_POST['quad'], $_POST['thick'], $_POST['density'],
            $_POST['material'], $price, $mysqli);
        require ('templates/main.php');

        break;
    case 'main':
        require('templates/main.php');
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
        require('templates/admin.php');
        break;
}