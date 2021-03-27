<?php
    $connection = mysqli_connect("localhost", "root", "quanduy", "testmysql");
    if(!$connection){
        die("Could not connect to database");
    }
?>