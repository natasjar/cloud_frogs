<?php
    //connection info
    $DATABASE_HOST = 'localhost'; 
    $DATABASE_USER = 'root';
    $DATABASE_PASS = ''; //ADD "password" BACK IN!!!!!!

    $DATABASE_NAME = 'cloud'; 
    $msg = '';
    
    //connect to the database with info above
    $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); 
    if ($conn->connect_error) {
        //If there is an error with the connection, stop the script and display the error.
        $msg = ("Connection failed: " . $conn->connect_error);
    }

    ?>