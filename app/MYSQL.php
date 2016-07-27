<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 23:28
 */

namespace liw\app;

use mysqli;
require '../config/app_config.php';

class MYSQL
{
    public function connection_bd()
    {
        $mysqli = new mysqli(DATABASE_HOSTNAME,DATABASE_USERNAME,DATABASE_PASSWORD) or die('Cannot connect to database');
        $mysqli->select_db(DATABASE_NAME) or die('Cannot select to database');
        $mysqli->set_charset('utf8');
        return $mysqli;
    }



}