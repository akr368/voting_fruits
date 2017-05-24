<?php


// database connection
require_once 'connection.php';

//Using POST variables to prevent SQL injection. This converts into HTMLspecialchars and strips slashes.

$username = htmlspecialchars(stripslashes($_POST['username']));
$password   = htmlspecialchars(stripslashes($_POST['password']));


//Query to authenticate users

$ans = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if ($ans->num_rows > 0) {    //sucess

    while ($row = $ans->fetch_assoc())
        echo 1;

} else {   //failure
    echo 0;
}

?>
