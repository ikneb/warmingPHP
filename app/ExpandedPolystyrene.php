<?php

/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 13:56
 */
namespace liw\app\ExpandedPolystyrene;

use liw\app\CalcMaterial;

class ExpandedPolystyrene implements CalcMaterial
{

    public function price($quad, $thick, $density=0, $mysqli)
    {
        if($thick == 3) {
            $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='expanded_polystyrene_3'")->fetch_assoc();
            if(!$price) die('No such price list');
        }else{
            $price = $mysqli->query("SELECT*FROM price_list_bd WHERE name='expanded_polystyrene_5'")->fetch_assoc();
            if(!$price) die('No such price list');
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