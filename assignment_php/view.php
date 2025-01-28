<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM details INNER JOIN login ON details.pid=login.pid");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td,tr{
            border-collapse:collapse;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
<table>
    <tr>
<th>Id</th>

<th>Product Name</th>
<th>Rate</th>
<th>MFD</th>
<th>EXP</th>
<th>Features</th>
<th>User name</th>
<th>Password</th>
<th colspan="2">Operations</th>
    </tr>
    <?php
     while($row=mysqli_fetch_assoc($data)){
    ?>
    <tr>
        <td><?php echo $row['pid']; ?></td>
        <td><?php echo $row['proname']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['mfd']; ?></td>
        <td><?php echo $row['exp']; ?></td>
        <td><?php echo $row['features']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> </td>
        
        <td> <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> </td>
    </tr>
<?php
}
?>


</table>

    </form>
</body>
</html>