<?php
$servername = "127.0.0.1";    //ip of local host.
$username = "root";
$password = "1992";          //mysql password for my local system.
$database= "voting";


$conn = new mysqli($servername, $username, $password,$database);

//verify connection
if ($conn->connect_error) {
    die("Oops! Connection failed: " . $conn->connect_error);
}




?>
