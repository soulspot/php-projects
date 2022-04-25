<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='users';
    $connection=mysqli_connect($server,$username,$password,$database);
    if(!$connection){
        die("we can't connect with db due to ".mysqli_connect_error());
    }
?>