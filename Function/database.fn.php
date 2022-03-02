<?php

function dbConnect(){
    require 'Config/config.php';

    try{
        $db=new PDO('mysql:host='.$infoDB['hostname'].';dbname='.$infoDB['dbname'].';charset=utf32',$infoDB['username'],$infoDB['password']);

        return $db;
    }catch(Exception $e){
        die($e->getMessage());
    }
}