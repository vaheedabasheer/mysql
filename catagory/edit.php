<?php
include 'connection.php';
$id=$_GET['id'];
$data=mysqli_query($con,"SELECT * FROM product WHERE pid='$id'");
$row=mysqli_fetch_assoc($data);
if(isset($_POST['submit']))
{
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    mysqli_query($con,"UPDATE product SET pname='$pname', price='$price' WHERE pid='$id'");
    echo"<script>window.location.href='view.php';</script>";


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
<table>
    <tr><td>Product Name:</td><td><input type="text" name="pname" value="<?php echo $row['pname'];?>"></td></tr>
    <tr><td> Price:</td><td><input type="text" name="price" value="<?php echo $row['price'];?>"></td></tr> 
    <tr ><td colspan="2"><center><button name="submit" >update</button></center></td></tr>
     
        </table>
    </form>
    
</body>
</html>