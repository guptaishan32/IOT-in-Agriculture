<?php

include_once("connection.php");

$query="select humidity,temp,Time from test";
$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>