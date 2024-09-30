<?php

        include "../../config.php";

        header("Access-Control-Allow-Methods: POST");
        header("Content-Type: application/json");


        if($_SERVER['REQUEST_METHOD']=="POST"){
            $C=new config();

           $method=$_POST['method'];

          $response= $C->addpayment($method);

          if($response){
            $arr['msg']="payment method added successfully";

          }else
          {
            $arr['msg']="payment method insertion faild";

          }


        }
        else{
            $arr['error']="only post method is allowd";
        }

        echo json_encode($arr);
        
        
        ?>