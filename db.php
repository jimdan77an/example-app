<?php
    $servername = "localhost";
    $username = "root";
    $password = "Shad66252302";
    $dbname = "empresa";
    $con = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }else{
        
    }
?>