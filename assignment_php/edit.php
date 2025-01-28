<?php
include 'connection.php';
$id=$_GET['id'];
$data=mysqli_query($con,"SELECT * FROM details WHERE pid='$id'");
$row=mysqli_fetch_assoc($data);
$data1=mysqli_query($con,"SELECT * FROM login WHERE pid='$id'");
$row1=mysqli_fetch_assoc($data1);
if(isset($_POST['submit']))
{
    $id=$_POST['pid'];
    $pro=$_POST['name'];
    $price=$_POST['rate'];
    $mfd=$_POST['mfd'];
    $exp=$_POST['exp'];
    $fea=$_POST['features'];
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    // mysqli_query($con,"UPDATE details SET proname='$pro',price='$price',mfd='$mfd',exp='$exp',features='$fea' WHERE pid='$id'" );
    mysqli_query($con,"UPDATE `details` SET `proname`='$pro',`price`='$price',`mfd`='$mfd',`exp`='$exp',`features`='$fea' WHERE `pid`='$id'");
    // mysqli_query($con,"UPDATE login SET username='$user',password='$pass' WHERE pid='$id'");
    mysqli_query($con."UPDATE `login` SET `username`='$user',`password`='$pass',`type`='admin' WHERE `pid`='$id'");
    echo "<script> alert 'updated successfully';</script>";
    echo "<script> window.location.href='view.php';</script>";
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
   
    <form action="" method="post">
<center>
    <table >
        <tr>
            <td>User Name</td>
            <td><input type="text" name="uname" value="<?php echo $row1['username'];?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" value="<?php echo $row1['password'];?>"></td>
        </tr>
<tr>
    
    <td>Product Name</td>
    <td><input type="text" name="name" value="<?php echo $row['proname'];?>"></td>
</tr>
<tr>
    <td>Rate</td>
    <td><input type="text" name="rate" value="<?php echo $row['price'];?>"></td>
</tr>
<tr>
    <td>MFD</td>
    <td><input type="date" name="mfd" value="<?php echo $row['mfd'];?>"></td>
</tr>
<tr>
    <td>EXP</td>
    <td><input type="date" name="exp" value="<?php echo $row['exp'];?>"></td>
</tr>
<tr>
    <td>Features</td>
    <!-- <td><textarea name="features" id="" value="<?php echo $row['features'];?>"></textarea></td> -->
     <td><textarea name="features" cols="20" rows="10"><?php echo $row['features']; ?></textarea></td>
</tr>
    </table>
    <button type="submit" name="submit">UPDATE</button>
    </center>
    </form>
   
</body>
</html>