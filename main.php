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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123200092</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="banner">
        <h1 class="banner-head">LIST OF INVENTORY </br> EVERYTHING OFFICE</h1>
    </div>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected">
            <a href="main.php" class="pure-menu-link">Home</a>
        </li>
        <li class="pure-menu-item pure-menu-selected">
            <a href="list product.php" class="pure-menu-link">Inventory List</a>
        </li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">List per Category</a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item">
                    <a href="buildings.php" class="pure-menu-link">Buildings</a>
                </li>
                <li class="pure-menu-item">
                    <a href="vehicle.php" class="pure-menu-link">Vehicles</a>
                </li>
                <li class="pure-menu-item">
                    <a href="office.php" class="pure-menu-link">Office Inventory</a>
                </li>
                <li class="pure-menu-item">
                    <a href="electronic.php" class="pure-menu-link">Electronic</a>
                </li>
            </ul>
        </li>
        </div>
        <a class="nav-link" href="logout.php" style="float: right"><button type="button" class="btn" style="color: white; background-color: #1F1D36;">Keluar</button></a>
      </div>
    </ul>
</div>

<div class="splash-container">
    <div class="splash">
        <h3 class="splash-head">Welcome</h3>
        <br>
        <h1 class="splash-subhead">
            <?php echo $_SESSION['username'] ."!". "</h1>"; ?>
        </h1>
    </div>
</div>
    
<div class="footer l-box">
    <p>
        <h3> Inventory Web 2021 </h3>
    </p>
</div>
</body>

<footer>

</footer>
</html>