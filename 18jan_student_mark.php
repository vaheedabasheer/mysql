<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM stureg_tb");
if(isset($_POST['submit']))
{
$stud=$_POST['stud'];
$phy=$_POST['phy'];
$che=$_POST['che'];
$math=$_POST['math'];
// mysqli_query($con,"INSERT INTO mark('id','physics','chemistry','maths')VALUES ('$stud','$phy','$che','$math')");

mysqli_query($con,"INSERT INTO `mark`(`maths`, `physics`, `chemistry`, `id`) VALUES ('$math','$phy','$che','$stud')");
// echo "<script>alert ('inserted successfully');</script>";

}
$data1=mysqli_query($con,"SELECT `m_id`,stureg_tb.id,`maths`,`physics`,`chemistry`,`Name` FROM `mark` INNER JOIN `stureg_tb` ON mark.id=stureg_tb.id");
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
   <form action="" method="POST">
Name       :    <select name="stud" class="form-control" id="">
<option value="">SELECT</option>
<?php
while($row=mysqli_fetch_assoc($data))
{
?>
<option value="<?php echo $row['id'] ;?>"><?php echo $row['Name'];?></option>
<?php
}
?>
</select> <br> <br>
physics : <input type="text" name="phy"> <br><br>
Chemistry : <input type="text" name="che"> <br><br>
Maths : <input type="text" name="math"> <br><br>
<button name="submit">SUBMIT</button>
   </form> 
   <br>
   <br>
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
      while($row1=mysqli_fetch_assoc($data1))
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