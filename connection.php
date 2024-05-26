<?php

    $database= new mysqli("localhost","root","root","chronoMed");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>