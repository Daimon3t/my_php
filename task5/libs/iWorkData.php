<?php

class Session
{
    public $key;
    public $value;

    function __construct()
    {
        $link = mysql_connect("localhost", "user1", "tuser1");
        if (!$link)
    {
        die('not connect : ' . mysql_error());
    }
    }

    public function insert ()
    {
        session_start();
        $_SESSION['yes']='no';
        return $this;
    }

}



$sess = new Session();

$sess->insert('yes', 'no');


var_dump($_SESSION);










?>
