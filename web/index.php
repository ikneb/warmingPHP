<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
$mysqli = new mysqli('localhost','root','') or die('Cannot connect to database');
$mysqli->select_db('warming_bd') or die('Cannot select to database');
$mysqli->set_charset('utf8');
mb_internal_encoding('UTF-8');
$act = isset ($_GET['act']) ? $_GET['act'] : 'main';

define('IS_ADMIN', isset($_SESSION['IS_ADMIN'] ));
require __DIR__ . '/../vendor/autoload.php';


switch ($act) {
    case 'calc':
        $cal = (new \liw\app\Styrofoam())->price($_POST['quad'],$_POST['thick'],$_POST['density'],$mysqli);
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