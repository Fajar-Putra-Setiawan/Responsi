<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title></title>
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
                    <a href="#" class="pure-menu-link">Buildings</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Vehicles</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Office Inventory</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Electronic</a>
                </li>
            </ul>
        </li>
        <li class="pure-menu-item">
            <a href="logout.php" class="pure-menu-link">Logout</a>
        </li>
    </ul>
</div>
  <form method="POST" action="input check.php">
          <table>
            <tr>
              <td>Item Code</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="item_id">
                </div>
              </td>
            </tr>
            <tr>
              <td>Name of goods</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="item_name">
                </div>
              </td>
            </tr>
            <tr>
              <td>Amount</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="amount">
                </div>
              </td>
            </tr>
            <tr>
              <td>Unit</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="unit">
                </div>
              </td>
            </tr>
            <tr>
              <td>Coming Date</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="date" class="form-control" aria-describedby="addon-wrapping" name="arrival_date">
                </div>
              </td>
            </tr>
            <tr>
              <td>Category</td><td></td>
              <td>
                <select class="form-select" aria-label="Default select example" name="category">
                <option selected>-</option>
                <option value="Office stationery">Office stationery</option>
                <option value="Building">Building</option>
                <option value="Electronic">Electronic</option>
                <option value="Vehicle">Vehicle</option>
                </select>
              </td>
            </tr>
           <tr>
              <td>Status</td><td></td>
              <td>
                <input type="radio" name="item_status" value="Well">  Well
                <input type="radio" name="item_status" value="Maintance"> Maintance
                <input type="radio" name="item_status" value="Damaged"> Damaged
              </td>
            </tr>
            <tr>
              <td>Price</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="price">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" name="submit" value="Simpan" style="color: white; background-color: #1F1D36;">
                <input class="btn btn-outline-dark" type="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>

<div class="footer l-box">
    <p>
        <h3> Inventory Web 2021 </h3>
    </p>
</div>
  </body>
</html>