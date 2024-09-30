<?php
        class Config{

               private $HOSTNAME="127.0.0.1";
               private $USERNAME="root";
               private $PASSWORD="";
               private $DB="rnw";
               public $conn;


               function initconn(){
                $this->conn=mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB);
               }


               function addpayment($method){
                $this->initconn();

                $query="INSERT INTO payment(method) VALUES('$method')";

                $res=mysqli_query($this->conn,$query);
                return $res;
               }

               function delete_payment($id){
                $this->initconn();

                $query="DELETE FROM payment WHERE id=$id";

                $res=mysqli_query($this->conn,$query);
                return $res;
                
               }

               function fetchall_method(){
                $this->initconn();

                $query="SELECT * FROM payment";

                $res=mysqli_query($this->conn,$query);
                return $res;

               }

               function fetch_singl_method($id){
                $this->initconn();

                $query="SELECT * FROM payment WHERE id=$id";

                $res=mysqli_query($this->conn,$query);
                return $res;


               }

               function update_method($id,$method){
                $this->initconn();

                $query="UPDATE payment SET method='$method' WHERE id=$id";

                $res=mysqli_query($this->conn,$query);
                return $res;

               }



        }




?>