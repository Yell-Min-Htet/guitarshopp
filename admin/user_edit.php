<?php
include('dbcon.php');

$id = $_GET['id']; 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
    $sql = "UPDATE users SET user_name='$name', user_email='$email', user_pass='$pass' WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);

   
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('User updated successfully');</script>";
        header('Location: user_list.php');
        exit(); 
    } else {
        echo "<script>alert('User update failed');</script>";
    }
}


$sql = "SELECT * FROM users WHERE user_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Edit User</h2>
    </div>
    <div class="form">
        <form method="post" action="">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['user_name']; ?>" required>
            
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['user_email']; ?>" required>
            
            <label>Password</label>
            <input type="password" name="pass" value="<?php echo $row['user_pass']; ?>" required>
            
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>
