<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 13:58
 */

namespace liw\app\MineralWool;


use liw\app\CalcMaterial;

class MineralWool implements CalcMaterial
{

    public function price( $quad, $thick, $density=0, $mysqli)
    {
        if($thick == 5) {
            $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='mineral_wool_5'")->fetch_assoc();
            if(!$price) die('No such price list');
        }else{
            $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='mineral_wool_10'")->fetch_assoc();
            if(!$price) die('No such price list');
        }
        $q=(int)$quad;
        $p=(int)$price['price'];
        $result =$q*$p;

        return $result;    }

    public function the_number()
    {
        // TODO: Implement the_number() method.
    }
}