<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM catagory");
$row=mysqli_fetch_assoc($data);
if(isset($_POST['submit']))
{
    $sel=$_POST['select'];
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    mysqli_query($con,"INSERT INTO `product`(`pname`,`cid`,`price`) VALUES ('$pname','$sel','$price')");

}
$data1=mysqli_query($con,"SELECT * FROM catagory INNER JOIN product ON catagory.cid=product.cid");
$row1=mysqli_fetch_assoc($data1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,tr,td{
            border:1px solid black;
            border-collapse:collapse;
            text-align:center;
        }
        table{
            width:50%;
        }
    </style>
</head>
<body>
    <form action="" method="post" >
<select name="select" id="" class="form-control">
    <option value="">SELECT</option>
    <?php
    while($row=mysqli_fetch_assoc($data)){
    ?>
    <option value="<?php echo $row['cid']?>"> <?php echo $row['cid']?></option>
<?php
    }
?>
</select> <br> <br>
<center>product details</center>
PRODUCT NAME: <input type="text" name="pname"><br> <br>
PRICE: <input type="text" name="price"><br><br>
<button type="submit" name="submit">SUBMIT</button>
    </form>
<br><br><br>
<center>
    <form action="" >
       
<table>
    <caption>PRODUCT DETAILS</caption>
    <tr>
<th>NAME</th>
<th>PRODUCT ID</th>
<th>PRODUCT NAME</th>
<th>PRICE</th>
<th colspan="2">OPERATIONS</th>
    </tr>
    <?php
      while($row1=mysqli_fetch_assoc($data1))
      {
        ?>
    <tr>
        
        
        <td><?php echo $row1['name'];?></td>
    <td><?php echo $row1['pid']; ?></td>
    <td><?php echo $row1['pname'];?></td>
    <td><?php echo $row1['price'];?></td>
   
    <td><a href="edit.php?id=<?php echo $row1['pid']?> ">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row1['pid']?>">delete</a>
</td>

</tr>
<?php
}
?>
</table>
    </form>
    </center>
</body>
</html>