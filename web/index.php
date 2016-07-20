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
$expanded_polystyrene = new \liw\app\ExpandedPolystyrene\ExpandedPolystyrene();
$mineral_wool = new \liw\app\MineralWool\MineralWool();

switch ($act) {
    case 'main':
        require('templates/main.php');
        break;

    case 'calc':
        switch ($_POST['material']){
            case  'styrofoam':
                //calculate price warming for styrofoam quadrature
                $price = $styrofoam->price($_POST['quad'],$_POST['thick'],$_POST['density'],$mysqli);
                break;
            case 'expanded_polystyrene':
                //calculate price warming for expanded_polystyrene quadrature
                $price = $expanded_polystyrene->price($_POST['quad'],$_POST['thick'], $mysqli);
                break;
            case 'mineral_wool':
                //calculate price warming for mineral_wool quadrature
                $price = $expanded_polystyrene->price($_POST['quad'],$_POST['thick'], $mysqli);
                break;
        }
        //insert customer
        $objMySQL->add_customer($_POST['name'], $_POST['number'], $_POST['quad'], $_POST['thick'], $_POST['density'],
            $_POST['material'], $price, $mysqli);
        require ('templates/result-calc.php');
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