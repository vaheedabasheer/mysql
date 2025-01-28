<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pwd'];
$data=mysqli_query ($con,"SELECT * FROM login WHERE username='$uname' and password='$pass' ");
if(mysqli_num_rows($data)>0)
{
$ses=mysqli_fetch_assoc($data);
$_SESSION['uname']=$ses['username'];
header("location:home.php");
}
else{
   echo "<script>alert ('invalid user name or password' );</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr{
            border:2px solid black;
            border-collapse:collapse;
            margin:20%;
        }
    </style>
</head>
<body>
    <center>
        <form action="" method="POST">
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td> Password</td>
        <td><input type="password" name="pwd"></td>
    </tr>
     <tr ><td colspan="2"><center><input type="button" value="Submit" name="submit"></center></td></tr>
    </table>
    </form>
    </center>
</body>
</html>