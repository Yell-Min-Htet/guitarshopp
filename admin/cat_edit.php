
<?php
include_once("dbcon.php");


if(isset($_POST['submit'])) {
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
    $sql = "UPDATE category SET cat_name = '$cat_name' WHERE cat_id = '$cat_id'";
    mysqli_query($conn, $sql);
    header('location: cat.php');
} else {
    $cat_id = $_GET['id'];
    $sql = "SELECT * FROM category WHERE cat_id = '$cat_id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>Edit Category</h2>
	</div>
	<div class="content">
			<form method="post" action="">
				<input type="hidden" name="cat_id" value="<?php echo $data['cat_id']; ?>">
				<label>Category Name:</label>
                <input type="text" name="cat_name" value="<?php echo $data['cat_name']; ?>">
				<input type="submit" name="submit" value="Submit">
			</form>
	</div><a href="cat.php">Back to Category List</a>
</body>
</html>
