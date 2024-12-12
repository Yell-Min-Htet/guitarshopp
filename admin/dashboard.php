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
          <div class="tables">
            <div class="table">
              <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info">
                            <span class="mt-5 h5">Welcome Back Admin</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>34</h5>
                                <span>Order List <i class="fa-solid fa-truck ms-2"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>50</h5>
                                <span>User List <i class="fa-solid fa-users ms-2"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>$ 340,000</h5>
                                <span>Income Balance <i class="fa-solid fa-money-check-dollar ms-2"></i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>12</h5>
                                <span>Message Noti <i class="fa-solid fa-message ms-2"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Order List</h4>

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
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Phyo Thuta</td>
                                            <td>098752345</td>
                                            <td>Yangon Hlaing</td>
                                            <td>Nike DunkLow</td>
                                            <td>23/4/2024</td>
                                            <td>2</td>
                                            <td>300</td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

             
            </div>
          </div>
        </div>
      </div>
    </div>
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
