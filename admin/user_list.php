<?php
    include('dbcon.php');
    if(isset($_POST['save'])){
        $name = $_POST['uname'];
        $email = $_POST['uemail'];
        $pass = $_POST['upass'];

        $sql = "INSERT into users(user_name, user_email, user_pass) values ('$name','$email','$pass')";
        mysqli_query($conn, $sql);
    }


?>




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
                    <h3 class="mt-5">User Lists</h3>
                    <form action="" class="p-3 mt-3" method="post">
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="uname" class="form-control" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">User Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="uemail" class="form-control" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">User Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="upass" class="form-control" >
                            </div>
                        </div>
                        <input type="submit" name="save" value="Save" class="btn btn-success mt-4">
                    </form>

                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php
                                $sql = "SELECT * from users";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                while( $data = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td><?php echo $i++  ?></td>
                                <td><?php echo $data['user_id']   ?></td>
                                <td><?php echo $data['user_name']   ?></td>
                                <td><?php echo $data['user_email']   ?></td>
                                <td><?php echo $data['user_pass']   ?></td>
                                <td><a href="user_edit.php?id=<?php echo $data['user_id']?>" type="submit" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="user_delete.php?id=<?php echo $data['user_id']?>" type="submit" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
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
