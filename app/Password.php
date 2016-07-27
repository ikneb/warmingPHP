<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 25.07.16
 * Time: 15:04
 */

namespace liw\app;


class Password
{
    private $mysqli;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function get_password()
    {
        $password =  $this->mysqli->query("SELECT pas FROM password WHERE id='1'")->fetch_assoc();
        if(!$password) die('No such price list');
        return $password['pas'];
    }

    public function edit_password()
    {
        $upd= $this->mysqli->prepare("UPDATE password SET pas=? WHERE id=?");
        $id=1;
        $upd->bind_param('si', $_POST['password'], $id );
        $status = $upd->execute();
        if($status === false)trigger_error($upd->error, E_USER_ERROR);

    }



}