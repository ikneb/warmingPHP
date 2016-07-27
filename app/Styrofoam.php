<?php

/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 13:54
 */
namespace liw\app;



class Styrofoam implements CalcMaterial
{

    private $mysqli;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function price()
    {
        if($_POST['thick'] == 5) {
            if($_POST['density'] == 25) {
                $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_5_25'")->fetch_assoc();
                if(!$price) die('No such price list');
            }else{
                $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_5_35'")->fetch_assoc();
                if(!$price) die('No such price list');
            }
        }else {
            if($_POST['density'] == 25) {
                $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_10_25'")->fetch_assoc();
                if(!$price) die('No such price list');
            }else {
                $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_10_35'")->fetch_assoc();
                if(!$price) die('No such price list');
            }
        }
        $q=(int)$_POST['quad'];
        $p=(int)$price['price'];
        $result =$q*$p;

        return $result;
    }

    public function the_number()
    {
        // TODO: Implement the_number() method.
    }
}