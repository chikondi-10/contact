<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'register';

    $connection = new mysqli($hostname,$username,$password,$database_name);

    if($connection->connect_error){
        die("Failed to connect with server ".$connection->connect_error);
    }else{
        echo "Connected to server";
    }

    
?>