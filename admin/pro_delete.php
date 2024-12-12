<?php
    include('dbcon.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE pro_id = '$id'";
    mysqli_query($conn, $sql);
    header('location: pro.php');
?>