<?php

include('includes/database.php');

$get_id =$_GET['id'];
	mysqli_query($con,"DELETE FROM post WHERE post_id = '$get_id'");
	header("Location: home.php");

?>
