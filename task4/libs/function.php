
<?php

class Suid 
{
    private $db_name = 'user1';
    private $user_name = 'user1';
    private $pass = 'tuser1';
    public $result_db = '';

   // public function __construct
   // {

   // }
 
    public function dbConnect ()
    {
        mysql_connect($this->db_name, $this->user_name, $this->pass); 
    }

    public function select ()
    {
        $query = 'SELECT '.$this->select;
        return $this;
    }
    public function from ($from)
    {
        'FROM'.$this->from;
        return $this;
    }
    public function where ($where)
    {
        'WHERE '.$this->where;
        return $this;
    }
    public function total ()
    {
        mysql_query($this->select().$this->from);
    }
    public function asd ()
    {
        $query = mysql_query('SELECT * FROM MY_TEST', $this->dbConnect()) ;
    }
}

class Mysql extends Suid
{

}
class Pgsql extends Suid
{

}

$conn = new Suid;

$conn->dbConnect();

$conn->select('*')->from('MY_TEST')->total();




$db = mysql_connect('user1','user1','tuser1');
mysql_select_db('MY_TEST',$db);


$result = mysql_query('SELECT * FROM MY_TEST',$db);







?>
