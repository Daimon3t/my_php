<?php

$uploaddir = '/usr/home/user8/public_html/MYPHP/upload';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);


//var_dump(upload());

if  (!file_exists($uploaddir))
{
    echo "folder <b>{$uploaddir}</b> does not exist";
    exit;
}

$arr = array();
$arr = $aFiles;
//$arr = $filesize;

$aFiles = scandir($uploaddir);

function table_files ($arr, $num = 1)
{
    $skipFiles = ['.','..'];
    $table = "<table>";
    $table .= '<tr>
                <th>Number</th>
                <th>file name</th>
                <th>size</th>
                <th>delete</th>
                </tr>';
    foreach($arr as $value)
    {
        if (in_array($value, $skipFiles))
        {
            continue;
        }
        //$filesize = filesize($value);
        $table .= "<tr>";
        $table .= "<td> $num </td>";
        $table .= "<td> $value </td>";
        $table .= "<td>  </td>";
        $table .= "</tr>";
        $num++;
    }
    $table .= "</table>";
    return $table; 
}



?>
