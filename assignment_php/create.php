<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
    $name=$_POST['name'];
    $rate=$_POST['rate'];
    $mfd=$_POST['mfd'];
    $exp=$_POST['exp'];
    $feat=$_POST['features'];
   
 
    mysqli_query($con,"INSERT INTO details(proname,price,mfd,exp,features) VALUES ('$name','$rate','$mfd','$exp','$feat')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"INSERT INTO login(username,password,type,pid)VALUES('$uname','$password','admin','$id')");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="POST">
<center>
    <table >
        <tr>
            <td>User Name</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>
<tr>
    
    <td>Product Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td>Rate</td>
    <td><input type="text" name="rate"></td>
</tr>
<tr>
    <td>MFD</td>
    <td><input type="date" name="mfd"></td>
</tr>
<tr>
    <td>EXP</td>
    <td><input type="date" name="exp"></td>
</tr>
<tr>
    <td>Features</td>
    <td><textarea name="features" id=""></textarea></td>
</tr>
    </table>
    <button type="submit" name="submit">SUBMIT</button>
    </center>
    </form>
   
</body>
</html>