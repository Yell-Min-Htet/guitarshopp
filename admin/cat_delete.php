<?php
    include('dbcon.php');
    $id = $_GET['id'];
    $sql = "DELETE from category where cat_id = '$id'";
    mysqli_query($conn, $sql);
    header("location: cat.php");


?>