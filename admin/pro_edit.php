<?php
session_start();

include_once 'dbcon.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cat = $_POST['cat'];
    
    if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "upload/$image");
    } else {
        $image = $_POST['existing_image'];
    }
    
    $sql = "UPDATE product SET pro_name = '$name', pro_price = '$price', cat_id = '$cat', pro_img = '$image' WHERE pro_id = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("Location: pro.php");
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE pro_id = '$id'";
$result = mysqli_query($conn, $sql);    
$row = mysqli_fetch_array($result);
?> 

<!DOCTYPE html>
<html>  
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Edit Product</h2>
	</div>
	<div class="form">
		<form method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $row['pro_id'];?>">
			
			<label>Product Name:</label>
			<input type="text" name="name" value="<?php echo $row['pro_name'];?>"><br><br>
			
			<label>Product Price:</label>
			<input type="text" name="price" value="<?php echo $row['pro_price'];?>"><br><br>
			
            <label>Category:</label>
            <select name="cat" class="form-control">
                <option value="">Choose Category</option>
                <?php 
                    $sql = "SELECT * FROM category";
                    $categories = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_assoc($categories)):
                ?>
                <option value="<?php echo $data['cat_id']; ?>" <?php if ($data['cat_id'] == $row['cat_id']) echo 'selected'; ?>>
                    <?php echo $data['cat_name']; ?>
                </option>
                <?php endwhile; ?>
            </select><br><br>
            
            <label>Product Image:</label>
			<input type="file" name="image"><br><br>
			<input type="hidden" name="existing_image" value="<?php echo $row['pro_img'];?>">
			<img src="upload/<?php echo $row['pro_img'];?>" width="100px" height="100px"><br><br>
			
			<input type="submit" name="submit" value="Update">
		</form>
	</div>
</body>
</html>
