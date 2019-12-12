<?php
        include_once("connection.php");  
        $query="select val from test'";
        $resp=mysqli_query($dbcon,$query);
        $hval=array();
        $hval['val']="val";
        while($row=mysqli_fetch_array($resp))
            {
                $hval['data'][]=$row["val"];
            }
    
        $result=array();
        array_push($result,$hval);
        echo json_encode($result,JSON_NUMERIC_CHECK);
    
?>
