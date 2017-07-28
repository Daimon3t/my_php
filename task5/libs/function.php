<?php

$link = mysql_connect("localhost", "user1", "tuser1");
if (!$link)
{
    die('not connect : ' . mysql_error());
}

$res = mysql_select_db('user1', $link);
if (!$res)
{
    die('not connect base');
}


//$guery = "SELECT * FROM MY_TEST";
$result = mysql_query('SELECT * FROM MY_TEST') or die('zapros :' . mysql_error());

while($row = mysql_fetch_array($result))
{
    echo '<p>key - '.$row['key'].'<br>'.'data - '.$row['data'].'</p><br>';
}


//var_dump($result);


mysql_close($link);
?>
