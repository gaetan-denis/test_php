<?php


function connection (){
    try{
        $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        return $dbh;
    }catch(PDOException $e){
    }

}
