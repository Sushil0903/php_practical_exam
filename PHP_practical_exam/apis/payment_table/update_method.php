<?php

        include "../../config.php";

        header("Access-Control-Allow-Methods: PUT,PATCH");
        header("Content-Type: application/json");

        if($_SERVER['REQUEST_METHOD']=="PATCH" || $_SERVER['REQUEST_METHOD']=="PUT"){
            $C=new config();
            

            $res=file_get_contents("php://input");

            parse_str($res,$_update);

           $id= $_update['id'];
           $method= $_update['method'];

           $res=$C->update_method($id,$method);

           if($res){
            $arr['msg']="method update sucessfully";

          }else
          {
            $arr['msg']="method updatestion faild";

          }

          
        }
        else{
            $arr['error']="only  UPDATE method is allowd";
        }

        echo json_encode($arr);
        
        
        ?>