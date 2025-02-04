<?php
include 'connection.php';
if(isset($_POST['search']))
{
    $name=$_POST['name'];
    $data=mysqli_query($con,"SELECT * FROM `stureg_tb` INNER JOIN mark ON stureg_tb.id=mark.id where name='$name'");
}
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
<form action="" method="post">
   Search: <input type="text" name="name">
   <button type="submit" name="search"> Search</button>

   </form><br><br><br>
   <center>
<table>
   <form action="">
      <tr>
         <th>NAME</th>
         <th>MATHS</th>
         <th>PHYSICS</th>
         <th>CHEMISTRY</th>
         <th colspan="2">OPERATIONS</th>
      </tr>
      <?php
      while($row1=mysqli_fetch_assoc($data))
      {
      ?>
      <tr>
         <td><?php echo $row1['Name'] ?></td>
         <td><?php echo $row1['maths'] ?></td>
         <td><?php echo $row1['physics'] ?></td>
         <td><?php echo $row1['chemistry'] ?></td>
         <td><a href="21jan_edit_mark.php?id=<?php echo $row1['id'] ?>">Edit</a></td>
         <td><a href="21jan_delete_mark.php?id=<?php echo $row1['id'] ?>">Delete</a></td>
         
      </tr>
      <?php
      }
      ?>
   </form>
</table>
   </center>
</body>
</html>