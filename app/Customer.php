<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 25.07.16
 * Time: 14:58
 */

namespace liw\app;


class Customer
{
    private $mysqli;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function add_customer($price)
    {

        $sel= $this->mysqli->prepare('INSERT INTO customer(name, number, quad, thick,density,material,price)
        VALUE(?, ?, ?, ?, ?, ?, ?)');
        $sel->bind_param('ssiiisi', $_POST['name'], $_POST['number'], intval($_POST['quad']), intval($_POST['thick']),
            intval($_POST['density']), $_POST['material'], $price );
        if(!$sel->execute()){
            die('Cannot insert entry');
            printf("Ошибка: %s.\n", mysqli_stmt_error($sel));

        }
    }

    public function get_all_customer()
    {
        $page = isset($_GET['page']) ? max(1,intval($_GET['page'])):1;
        $limit = 17;
        $records = array();
        $page_result = $this->mysqli->query("SELECT COUNT(*) AS cust FROM customer")->fetch_assoc();
        $customers = $page_result['cust'];
        $offset = $customers - ($limit*$page) ;
        $pages = $customers/$limit+1;
        if(($limit*$page)>$customers){
            $offset=0;
            $limit = $customers%$limit;
        }
        $sel = $this->mysqli->query("SELECT * FROM  customer
        WHERE id ORDER BY id LIMIT $offset, $limit");
        while ($row = $sel->fetch_assoc()){
            $all_customer[]=$row;
        }
        $records['all_customer']=$all_customer;
        $records['page'] = $page;
        $records['pages'] = $pages;
        return $records;
    }

    public function delete_customer($id)
    {
        $this->mysqli->query("DELETE FROM customer WHERE id = $id" ) or die('Cannot delete entry');
    }


}