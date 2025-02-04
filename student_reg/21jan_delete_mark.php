<?php
include 'connection.php';
$id=$_GET['id'];
// var_dump($id);
// exit();
// mysqli_query($con,"DELETE FROM stureg_tb WHERE id='$id'");
mysqli_query($con,"DELETE FROM `mark` WHERE id='$id'");
echo "<script>alert 'deleted successfully;</script>";
echo "<script>window.location.href='18jan_student_mark.php';</script>"

?>