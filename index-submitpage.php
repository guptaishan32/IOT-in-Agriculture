<?php
session_start();
include_once("connection.php");
$uid=$_POST["suid"];
$_SESSION["uid"]=$uid;
$name=$_POST["sname"];
$_SESSION["name"]=$name;
$spwd=$_POST["spwd"];
$mobile=$_POST["smobile"];
$_SESSION["mobile"]=$mobile;
$query="insert into greenhouse values('$uid','$name','$spwd','$mobile',current_date,current_time)";
mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)=="")
{
    
        header("location:showData.php");
}
else
    echo mysqli_error($dbcon);

?>