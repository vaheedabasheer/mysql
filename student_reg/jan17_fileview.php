<?php
include 'connection.php';
$var=mysqli_query($con,"SELECT * FROM fileup");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th{
border:1px solid black;
border-collapse:collapse;
height: 250px;
width: 100px;
 }
    </style>
</head>
<body>
    <!-- <img src="images/866986735.jpeg" alt=""> -->
    <table>
        <th>ID</th>
        <th>Images</th>
        <?php
while($row=mysqli_fetch_assoc($var))
{
    ?>

    <tr>
        
        <td><?php echo $row['f_id'];?></td>
        <td><img src="images/<?php echo $row['file']; ?>"  height="100" width="200"></td>
    </tr>
    <?php
}
?>
       
    </table>
</body>
</html>