<?php

        include "../../config.php";

        header("Access-Control-Allow-Methods: POST");
        header("Content-Type: application/json");


        if($_SERVER['REQUEST_METHOD']=="POST"){
            $C=new config();

           $id=$_POST['id'];

          $res=$C->fetch_singl_method($id);
          $response=mysqli_fetch_assoc($res);

          $arr['msg']=$response;

          

        }
        else{
            $arr['error']="only post method is allowd";
        }

        echo json_encode($arr);
        
        
        ?>