<?php

        include "../../config.php";

        header("Access-Control-Allow-Methods: GET");
        header("Content-Type: application/json");


        if($_SERVER['REQUEST_METHOD']=="GET"){
            $C=new config();
            $array=[];

            $res=$C->fetchall_method();
            while($obj=mysqli_fetch_assoc($res)){

                array_push($array,$obj);

            }

            echo json_encode($array);
            
            


        }
        else{
            $arr['error']="only post method is allowd";
        }

        echo json_encode($arr);
        
        
        ?>