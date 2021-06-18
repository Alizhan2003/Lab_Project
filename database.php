<?php
    $url='localhost';
    $username='root';
    $password='';

    $conn = mysqli_connect("localhost", "root", "", "cinema_db");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>