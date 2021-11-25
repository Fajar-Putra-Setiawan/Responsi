<?php
	include 'config.php';

    $no = $_POST['no'];
	$item_id = $_POST['item_id'];
    $name = $_POST['item_name'];
    $amount = $_POST['amount'];
    $unit = $_POST['unit'];
    $arrival_date = $_POST['arrival_date'];
    $category = $_POST['category'];
    $status = $_POST['item_status'];
    $price = $_POST['price'];

	$query 	= mysqli_query($conn, "UPDATE inventory SET item_id='$item_id', item_name='$name', amount='$amount', unit='$unit', arrival_date='$arrival_date', category='$category', item_status='$status', price='$price' WHERE no='$no'");

	if($query)
	{
		header("location:list product.php");
	}
	else
	{
		echo "Opps, Somethings Wrong.";
	}
?>