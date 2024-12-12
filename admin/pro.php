<?php
include('dbcon.php');

if(isset($_POST['save'])){
    $pro_name = $_POST['name'] ?? '';
    $pro_price = $_POST['price'] ?? '';
    $pro_cat = $_POST['cat'] ?? '';
    
    if (empty($pro_name) || empty($pro_price) || empty($pro_cat) || !isset($_FILES['img'])) {
        echo "<script>alert('Please fill in all fields and select an image.')</script>";
        return; // Stop further execution
    }

    // Handle image upload
    $pro_img = $_FILES['img']['name'];
    $pro_img_tmp = $_FILES['img']['tmp_name'];
    
    if (move_uploaded_file($pro_img_tmp, "upload/$pro_img")) {
        // Insert product into the database
        $sql = "INSERT INTO product (pro_name, pro_price, pro_img, cat_id) VALUES ('$pro_name', '$pro_price', '$pro_img', '$pro_cat')";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "<script>alert('Product Added')</script>";
        } else {
            echo "<script>alert('Product Not Added')</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image.')</script>";
    }
}

// Fetch products and categories for the table
$sql = "SELECT * from product inner join category on product.cat_id = category.cat_id";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management</title>
    <link rel="stylesheet" href="../all.min.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
            <h5 class="mt-4"><a href="balance.php">Balance List</a></h5>
          </div>
        </div>

        <div class="col-lg-10">
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4">Product Lists</h3>

                    <!-- Form for adding a product -->
                    <form action="" class="p-3 mt-5" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                            <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                            <input type="file" name="img" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                            <select name="cat" class="form-control">
                                <option value="">Choose Category</option>
                                <?php 
                                    $sql = "SELECT * FROM category";
                                    $categories = mysqli_query($conn, $sql);
                                    while($data = mysqli_fetch_assoc($categories)):
                                ?>
                                <option value="<?php echo $data['cat_id'] ?>"><?php echo $data['cat_name'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            </div>
                        </div>
                        <input type="submit" name="save" value="Save" class="btn btn-success mt-4">
                    </form>

                    <!-- Table for displaying products -->
                    <table class="table mt-5" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th colspan=2>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['pro_id']; ?></td>
                                <td><?php echo $row['pro_name']; ?></td>
                                <td><?php echo $row['pro_price']; ?></td>
                                <td><img src="upload/<?php echo $row['pro_img']; ?>" width="100px" height="100px"></td>
                                <td><?php echo $row['cat_name']; ?></td>
                                <td><a href="pro_edit.php?id=<?php echo $row['pro_id']; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="pro_delete.php?id=<?php echo $row['pro_id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
