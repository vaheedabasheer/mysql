<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM details WHERE pid='$id'");
echo "<script>alert ('deleted successfuly'); </script>";
echo "<script>window.location.href='view.php';</script>";
?>


