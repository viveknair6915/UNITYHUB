<?php

include('includes/database.php');

$get_id =$_GET['id'];
	mysqli_query($con,"DELETE FROM comments WHERE comment_id = '$get_id'");
	header("Location: home.php");

?>
