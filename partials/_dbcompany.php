<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "company";

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn){
    echo "Database successfully connected!!";
}
else{
    echo "Try Again";
}


?>