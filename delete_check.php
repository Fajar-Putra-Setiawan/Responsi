<?php
	include 'config.php';
	$no	= $_GET['no'];

	$query 	= mysqli_query($conn, "DELETE FROM inventory WHERE no = '$no'");

	if($query)
	{
		header("location:main.php");
	}
	else
	{
		echo "Opps, Somethings Wrong.";
	}
?>