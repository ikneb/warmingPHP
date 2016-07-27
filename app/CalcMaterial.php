<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 20.07.16
 * Time: 13:49
 */
namespace liw\app;

interface CalcMaterial
{
    const QUAD_LIST_EP = 0.72;

    public function price();
    public function the_number();


}