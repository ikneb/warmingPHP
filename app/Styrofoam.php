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


    public function price($quad, $thick, $density, $mysqli)
    {
        if($thick == 5) {
            if($density == 25) {
                $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_5_25'")->fetch_assoc();
                if(!$price) die('No such entry');
            }else{
                $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_5_35'");
            }
        }else {
            if($density == 25) {
                $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_10_25'");
            }else {
                $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='styrofoam_10_35'");
            }
        }
        $q=(int)$quad;
        $p=(int)$price['price'];
        $result =$q*$p;

        return $result;
    }

    public function the_number()
    {
        // TODO: Implement the_number() method.
    }
}