<?php
    include 'connection.php';

    $fname      = $_POST['first_name'];
    $lname      = $_POST['last_name'];
    $gender     = $_POST['gender'];
    $dob        = $_POST['dateOfBirth'];
    $tel        = $_POST['telephone'];
    $country    = $_POST['country'];
    $pic        = $_POST['picture'];
    $user       = $_POST['username'];
    $pass       = $_POST['password'];

    $sql_insert_query = "insert into personal_information (first_name,last_name,dob,gender,phone,picture,country,username,password) values ('$fname','$lname','$dob','$gender','$tel','$pic','$country','$user','$pass')";

    if($connection->query($sql_insert_query) === true){
        echo 'suss';
    }else{
        echo 'Error'.$connection->error
;    }
?>