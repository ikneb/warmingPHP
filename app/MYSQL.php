<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 23:28
 */

namespace liw\app;

use mysqli;
require '../app/app_config.php';

class MYSQL
{
    public function connection_bd()
    {
        $mysqli = new mysqli(DATABASE_HOSTNAME,DATABASE_USERNAME,DATABASE_PASSWORD) or die('Cannot connect to database');
        $mysqli->select_db(DATABASE_NAME) or die('Cannot select to database');
        $mysqli->set_charset('utf8');

        return $mysqli;
    }

    public function add_customer($name, $number, $quad, $thick, $density, $material, $price, $mysqli)
    {
        $q = (int)$quad;
        $th = (int)$thick;
        $den = (int)$density;
        $sel= $mysqli->prepare('INSERT INTO customer(name, number, quad, thick,density,material,price)
        VALUE(?, ?, ?, ?, ?, ?, ?)');
        $sel->bind_param('ssiiisi', $name, $number, $q, $th, $den, $material, $price );
        if(!$sel->execute()){
            die('Cannot insert entry');
            printf("Ошибка: %s.\n", mysqli_stmt_error($sel));

        }
    }

    public function get_customer()
    {

    }

    public function add()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}