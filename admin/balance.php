<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../all.min.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2">
          <h4 class="mt-3">Admin</h4> <br><br>
          <div class="listss">
            <h5 class="mt-4"><a href="dashboard.php">Dashboard</a></h5>
            <h5 class="mt-4"><a href="user_list.php">User List</a></h5>
            <h5 class="mt-4"><a href="cat.php">Category List</a></h5>
            <h5 class="mt-4"><a href="pro.php">Product List</a></h5>
            <h5 class="mt-4"><a href="order.php">Order List</a></h5>
            <h5 class="mt-4"><a href="view_message.php">View Message List</a></h5>
            <h5 class="mt-4"><a href="balance.php">balance List</a></h5>

          </div>
        </div>
        <div class="col-lg-10">
            <main>
              <div class="container-fluid px-4">
                <h3 class="my-3 mt-5">Balance Quantity</h3>
    
                <form action="" class="p-3 mt-3" method="post">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Product Name</label
                    >
                    <div class="col-sm-10">
                      <select name="pro_name" id="product_id" class="form-control">
                        <option value="">Choose Product Name</option>
                        <?php
                          $sql = "SELECT * from PRODUCT";
                          $res = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($res)):
    
                        ?>
                        <option value="<?php echo $row['PRO_ID'];?>"><?php echo $row['PRO_NAME'];?></option>
                        <?php endwhile; ?>
    
    
                      </select>
                    </div>
                  </div>
                
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Income Quantity</label
                    >
                    <div class="col-sm-10">
                      <input type="text" name="inc_qty" class="form-control" />
                    </div>
                  </div>
                  <input
                    type="submit"
                    name="save"
                    value="Save"
                    class="btn btn-success mt-4"
                  />
                </form>
    
                <div class="row w-50 my-5">
                  <form action="" method="post" class="d-flex">
                    <select name="cat" id="" class="form-control mx-4">
                      <option value="">Search By category</option>
                      <option value="">Shoes</option>
                      <option value="">Clothes</option>
                      <option value="">Hat</option>
                    </select>
                    <input
                      type="submit"
                      name="search"
                      class="btn btn-success"
                      value="Search"
                    />
                  </form>
                </div>
    
                <table class="table" id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Balance ID</th>
                      <th>Product Name</th>
                      <th>Order ID</th>
                      <th>Order Quantity</th>
                      <th>Date</th>
                      <th>Income Quantity</th>
                      <th>Balance</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>Nike Jordan 1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>12/5/2024</td>
                    <td>300</td>
                    <td>40000</td>
                    <td>
                      <a href="balance_edit.html" type="submit" class="btn btn-outline-success" >Edit</a>
                      <a href="balance_delete.html" class="btn btn-outline-danger" >Delete</a>
                    </td>
                   
                  </tr>
                </table>
              </div>
            </main>
          </div>
      </div>
    </div>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
