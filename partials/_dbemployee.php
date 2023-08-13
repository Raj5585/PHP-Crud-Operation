<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "employee";

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn){
    echo "Database successfully connected!!";
}
else{
    echo "Try Again";
}


?>