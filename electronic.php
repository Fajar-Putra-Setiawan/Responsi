<?php

$connect= new mysqli("localhost","root","","responsi");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123200092</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    <a href="vehicles.php" class="pure-menu-link">Vehicles</a>
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
<br>
<table class="table">
  <thead class="table-dark">
      <tr>
          <th>No</th>
          <th>Code</th>
          <th>Name of goods</th>
          <th>Amount</th>
          <th>Unit</th>
          <th>Coming Date</th>
          <th>Category</th>
          <th>Status</th>
          <th>Unit Price</th>
          <th>Total Price</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    <?php $number=1; ?>
    <?php $take=$connect->query("SELECT * FROM inventory WHERE category='electronic'"); ?>
    <?php while($mix=$take->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $number; ?></td>
        <td><?php echo $mix['item_id']; ?></td>
        <td><?php echo $mix['item_name']; ?></td>
        <td><?php echo $mix['amount']; ?></td>
        <td><?php echo $mix['unit']; ?></td>
        <td><?php echo $mix['arrival_date']; ?></td>
        <td><?php echo $mix['category']; ?></td>
        <td><?php echo $mix['item_status']; ?></td>
        <td>Rp. <?php echo number_format($mix['price']); ?></td>
        <td><?php echo "Rp "; echo number_format($mix['total price'] = $mix['price']*$mix['amount']);?></td>
        <td>
            <a href=update.php?no=<?php echo $mix['no'];?> class="btn btn-primary">Edit</a>
            <a href=delete_check.php?no=<?php echo $mix['no'];?> class="btn btn-primary">Delete</a>
        </td>
      </tr>
      <?php $number++; ?>
      <?php } ?>

  </tbody>
</table>
    
<div class="footer l-box">
    <p>
        <h3> Inventory Web 2021 </h3>
    </p>
</div>
</body>

</html>