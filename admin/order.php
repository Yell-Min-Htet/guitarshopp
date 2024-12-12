<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./all.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
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
                    <h3 class="my-4 mt-5">Order Lists</h3>
                    <table class="table" id="datatablesSimple" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Customer Phno</th>
                                <th>Customer Address</th>
                                <th>Product Name</th>
                                <th>Order Date</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            <?php
                            include("dbcon.php");
                            $sql="SELECT * from product inner join orders on product.pro_id = orders.order_id
                            inner join users on product.pro_id = users.user_name";
                            $result=mysqli_query($conn ,$sql);
                            $i=1;
                            while($row=mysqli_fetch_assoc($result)):
                    

                            ?>
                            <tr>
                              <td><?php echo $i++;?></td>
                              <td><?php echo $row['order_id'];?></td>
                              <td><?php echo $row['user_name'];?></td>
                              <td><?php echo $row['user_phno'];?></td>
                              <td><?php echo $row['user_address'];?></td>
                              <td><?php echo $row['pro_name'];?></td>
                              <td><?php echo $row['order_date'];?></td>
                              <td><?php echo $row['order_quantity'];?></td>
                              <td><?php echo $row['order_amount'];?></td>
                            </tr>

                            <?php
                            endwhile;

                            ?>



                        </tbody>
                       
                    </table>
                </div>
            </main>
        </div>


      </div>
    </div>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
