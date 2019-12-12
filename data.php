<?php
        include_once("connection.php");
    
        
        $query="select * from Test";
    
        $resp=mysqli_query($dbcon,$query);

        $value = array();
        $value['val'] = "Value";

        $id = array();
        $id['ID'] = "Time";


        while($row=mysqli_fetch_array($resp))
            {
                $id['data'][]=$row["Time"];
                $value['data'][]=(int)$row["val"];
            }
    
            $result=array();
            array_push($result,$id);
            array_push($result,$value);
            echo json_encode($result,JSON_NUMERIC_CHECK);
    
?>


