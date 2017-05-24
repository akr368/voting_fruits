<?php

require_once'connection.php';

//sorted by descending order of votes (highest------>lowest)

$result=mysqli_query($conn,"SELECT * FROM fruits order by votes DESC");

if ($result->num_rows > 0) {
    while($r = mysqli_fetch_assoc($result))
	   $f_array[]=$r;

	echo json_encode($f_array);
}

else {
	echo 0;
}

?>
