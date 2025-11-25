<?php

$conn = new mysqli("localhost", "root", "", "myDB");

if($conn->connect_error){
    echo "Error: ".$conn->conect_error;
}

?>