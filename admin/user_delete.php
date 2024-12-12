<?php
    include('dbcon.php');
    $id = $_GET['id'];
    $sql = "DELETE from users where user_id = '$id'";
    mysqli_query($conn ,$sql);
    header("location: user_list.php");
?>