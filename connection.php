<?php
$servername="localhost";
$username="root";
$password="";
$dbname="api_d";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn){
    echo "Connected successfully";
}
else{
    "Connection failed";
}

?>