<?php
include 'connection.php';
$data=mysqli_query($con,"select * from stureg_tb INNER JOIN login_tb ON stureg_tb.id=login_tb.id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;
            border collapse:collapse;
        }
    </style>
</head>
<body>
   <table>
    <tr>
        <th>Name</th>
        <th>id</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>District</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($data)){
    ?>
    <tr>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone_no'];?></td>
        <td><?php echo $row['district'];?></td>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['password'];?></td>
        <td>
           <a href="28dec_edit.php?id=<?php echo $row['id']?>">Edit</a> </td>
         <td> <a href="2jan_delete.php?id=<?php echo $row['id']?>">Delete</a> </td>
    </tr>
    <?php
    }
    ?>
   </table> 
</body>
</html>