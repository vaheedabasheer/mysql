<?php
include 'connection.php';
$id=$_GET['id'];

$data=mysqli_query($con,"SELECT * FROM `stureg_tb` INNER JOIN mark ON stureg_tb.id=mark.id where stureg_tb.id='$id'");
$row=mysqli_fetch_assoc($data);

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $math=$_POST['math'];
    $phy=$_POST['phy'];
    $che=$_POST['che'];
    

    mysqli_query($con,"UPDATE mark SET maths='$math', physics='$phy',chemistry='$che' WHERE id='$id' ");
    echo "<script>'updated successfully';</script>";
    echo "<script>window.location.href='18jan_student_mark.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;;
            border-collapse:collapse;
            width:50%;
            text-align:center;
            padding:20px;
        }
    </style>
</head>
<body>
    <center>
  
        <form action="" method="POST">
          
           NAME:<input type="text" name="name" value="<?php echo $row['Name']; ?>"><br><br>
          MATHS:<input type="text" name="math" value="<?php echo $row['maths']; ?>"><br><br>
           PHYSICS:<input type="text" name="phy" value="<?php echo $row['physics']; ?>"><br><br>
          CHEMISTRY:<input type="text" name="che" value="<?php echo $row['chemistry']; ?>"><br><br>
          <button name="submit">UPDATE</button>
           
           
        </form>
   
    </center>
</body>
</html>