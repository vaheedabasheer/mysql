<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `stureg_tb` WHERE id='$id'");

echo "<script>alert('delete successfully')</script>";
echo "<script>window.location.href='28dec_view.php';</script>";

?>