<?php
class database {
    
    protected $connection;

    function setconnection(){
        try{

            $this->connection=new PDO("mysql:host=localhost; dbname=esportsmanagementsystem","fahim","6Dji!dRFP2L6S[Xf");
            // echo "Connected";

        } catch(PDOException $e){
       
            echo " Error";

          }

    }
}