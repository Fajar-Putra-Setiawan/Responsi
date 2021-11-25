<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container-continue">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Welcome, " . $_SESSION['username'] ."!". "</h1>"; ?>
            
            <div class="input-group">
            <a href="main.php" class="btn">Continue</a>
            </div>
        </form>
        <a href="logout.css"></a>
    </div>
</body>
</html>