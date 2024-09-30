<?php

        include "../../config.php";

        header("Access-Control-Allow-Methods: DELETE");
        header("Content-Type: application/json");

        if($_SERVER['REQUEST_METHOD']=="DELETE"){
            $C=new config();
            

            $res=file_get_contents("php://input");

            parse_str($res,$_delete);

           $id= $_delete['id'];
           $res=$C->delete_payment($id);

          
           if($res){
            $arr['msg']="payment method Delete suceesfully";

          }else
          {
            $arr['msg']="payment method Deletion faild";

          }
          
        }
        else{
            $arr['error']="only post DELETE is allowd";
        }

        echo json_encode($arr);
        
        
        ?>