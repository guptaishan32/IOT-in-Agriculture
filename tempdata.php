<?php
        include_once("connection.php");
    
        
        $query="select * from Test";
    
        $resp=mysqli_query($dbcon,$query);

        $id = array();
        $id['ID'] = "Time";

        $h = array();
        $h["humidity"] = "humidity";
            
        $t = array();
        $t["temp"] = "temp";
        


        while($row=mysqli_fetch_array($resp))
            {
                $id['data'][]=$row["Time"];
                $h['data'][]=(int)$row["humidity"];
                $t['data'][]=(int)$row["temp"];
            }
    
            $result=array();
            array_push($result,$id);
            array_push($result,$h);
            array_push($result,$t);
            echo json_encode($result,JSON_NUMERIC_CHECK);
    
?>


