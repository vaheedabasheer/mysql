<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM product WHERE pid='$id'");
echo "<script>alert 'deleted successfully';</script>";
echo "<script>window.location.href='view.php';</script>";
?>