<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "responsi";
 
$conn = new mysqli($server, $user, $pass, $database);
 
if (!$conn) {
    echo("<script>alert('Failed to Connect to Server')</script>");
}
 
?>