<?php 
 
include 'config.php';

    $item_id = $_POST['item_id'];
    $name = $_POST['item_name'];
    $amount = $_POST['amount'];
    $unit = $_POST['unit'];
    $arrival_date = $_POST['arrival_date'];
    $category = $_POST['category'];
    $status = $_POST['item_status'];
    $price = $_POST['price'];

    $query 	= mysqli_query($conn, "INSERT INTO inventory VALUES (' ','$item_id', '$name', '$amount', '$unit','$arrival_date','$category','$status','$price')")
	or die(mysqli_error($conn));

    if($query)
	{
		header("location:add.php");
	}
	else
	{
		echo "Oppss, Somethings Wrong";
	}             
 
?>