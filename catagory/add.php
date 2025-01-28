<?php
include 'connection.php';
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    mysqli_query($con,"INSERT INTO catagory(`name`) VALUES ('$name')");

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
    
    Name: <input type="text" name="name"> <br><br>
<button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>
