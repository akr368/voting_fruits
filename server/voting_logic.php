<?php

require_once'connection.php';

$id= htmlspecialchars(stripslashes($_GET['id']));

$result=mysqli_query($conn,"UPDATE `fruits` SET `votes`=votes+1 WHERE id=$id");

if (mysqli_affected_rows($conn))
	echo 1;
else
	echo 0;


?>
