<?php
/**
 * Created by PhpStorm.
 * User: benki
 * Date: 25.07.16
 * Time: 15:01
 */

namespace liw\app;


class Message
{
    private $mysqli;
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function add_message()
    {
        $sel= $this->mysqli->prepare('INSERT INTO sms(name, email, number, text )
        VALUE(?, ?, ?, ?)');
        $sel->bind_param('ssss', $_POST['name'], $_POST['email'], $_POST['number'], $_POST['text'] );
        if(!$sel->execute()){
            die('Cannot insert entry');
            printf("Ошибка: %s.\n", mysqli_stmt_error($sel));
        }
    }

    public function delete_sms($id)
    {
        $this->mysqli->query("DELETE FROM sms WHERE id = $id" ) or die('Cannot delete entry');
    }

    public function get_all_message()
    {
        if(!IS_ADMIN) die ("You must be admin to add entry");
        $page = isset($_GET['page_sms']) ? max(1,intval($_GET['page_smsgit'])):1;
        $limit = 10;
        $records = array();
        $page_result = $this->mysqli->query("SELECT COUNT(*) AS sms FROM sms")->fetch_assoc();
        $messages = $page_result['sms'];
        $offset = $messages - ($limit*$page) ;
        $pages = $messages/$limit+1;
        if(($limit*$page)>$messages){
            $offset=0;
            $limit = $messages%$limit;
        }
        $sel = $this->mysqli->query("SELECT * FROM  sms
        WHERE id ORDER BY id LIMIT $offset, $limit");
        while ($row = $sel->fetch_assoc()){
            $all_sms[]=$row;
        }
        $records['all_sms']=$all_sms;
        $records['page'] = $page;
        $records['pages'] = $pages;

        return $records;

    }

}