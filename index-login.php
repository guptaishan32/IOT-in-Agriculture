<?php
    session_start();
    include_once("connection.php");

        $uid=$_GET["luid"];
        $_SESSION["uid"]=$uid;
        $lpwd=$_GET["lpwd"];

$query="select * from greenhouse where uid='$uid' and pwd='$lpwd'";
$query1="select * from greenhouse where uid='$uid'";
$table=mysqli_query($dbcon,$query);
$table1=mysqli_query($dbcon,$query1);
if(mysqli_num_rows($table1)==0)
    echo "Invalid Email id!";
else
{
    if(mysqli_num_rows($table)==0)
        echo "Invalid Password!";
    else{
        $_SESSION["uid"]=$uid;
        $row=mysqli_fetch_array($table);
        $mobile=$row["mobile"];
        $name=$row["name"];
        $_SESSION["mobile"]=$mobile;
        $_SESSION["name"]=$name;
            echo "Loging you";
    }
}

?>
