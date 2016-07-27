<?php

/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 13:56
 */
namespace liw\app;

use liw\app\CalcMaterial;

class ExpandedPolystyrene implements CalcMaterial
{
    private $mysqli;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function price()
    {
        if($_POST['thick'] == 3) {
            $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='expanded_polystyrene_3'")->fetch_assoc();
            if(!$price) die('No such price list');
        }else{
            $price = $this->mysqli->query("SELECT*FROM price_list_bd WHERE name='expanded_polystyrene_5'")->fetch_assoc();
            if(!$price) die('No such price list');
        }
        $result = (intval($_POST['quad'])) * (intval($price['price']));
        return $result;
    }

    public function the_number()
    {
        // TODO: Implement the_number() method.
    }
}