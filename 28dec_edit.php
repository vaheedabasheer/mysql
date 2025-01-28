<?php
include 'connection.php';
$id=$_GET['id'];
$data=mysqli_query($con,"SELECT * FROM stureg_tb where id='$id'");
$row=mysqli_fetch_assoc($data);
$gender=$row['gender'];
$data1=mysqli_query($con,"SELECT * FROM login_tb where id='$id'");
$row1=mysqli_fetch_assoc($data1);
if(isset($_POST['submit']))
{
    
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $district=$_POST['district'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $user_name=$_POST['uname'];
        $password=$_POST['pwd'];
        // var_dump($id);
        // exit();

mysqli_query($con,"UPDATE stureg_tb SET Name='$name', dob='$dob', email='$email', phone_no='$phone',district='$district',gender='$gender' WHERE id='$id'");
mysqli_query($con,"UPDATE login_tb SET user_name='$user_name',password='$password' WHERE id='$id'");
echo "<script>alert('update successfully');</script>" ;
echo "<script>window.location.href='28dec_view.php';</script>";
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
    <form action="" method="POST">
Name: <input type="text" value="<?php echo $row['Name'];?>" name="name"> <br>
DOB: <input type="date" value="<?php echo $row['dob'];?>" name="dob"> <br>
Gender: <input type="radio" name="gender" value="male"<?php if($gender=="male") echo 'checked="checked"'?>>Male
<input type="radio" name="gender" value="female"<?php if($gender=="female") echo 'checked="checked"'?>>Female
<br>
District:
<select name="district" id="">
<option ></option>
<option value="alapuzha" <?php if($row['district']=='alapuzha') echo 'selected="selected"';?>>Alapuzha</option>
<option value="thrissur" <?php if($row['district']=='thrissur') echo 'selected="selected"';?> >Thrissur</option>
<option value="kozhikode" <?php if($row['district']=='kozhikode') echo 'selected="selected"';?> >Kozhikode</option>
<option value="kannur" <?php if($row['district']=='kannur') echo 'selected="selected"';?> >Kannur</option>
<option value="kasargod" <?php if($row['district']=='kasargod') echo 'selected="selected"';?> >Kasargod</option>
<option value="wayanadu" <?php if($row['district']=='wayanadu') echo 'selected="selected"';?> >Wayanadu</option>
<option value="idukki" <?php if($row['district']=='idukki') echo 'selected="selected"';?> >Idukki</option> 
</select> <br>
Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"> <br>
phone no: <input type="text" name="phone" value="<?php echo $row['phone_no']; ?>"> <br>
user name: <input type="text" name="uname" value="<?php echo $row1['user_name']; ?>"> <br>
password: <input type="password" name="pwd" value="<?php echo $row1['password'];?>"> <br>
<!-- <input type="button" name="submit" value="update"> -->
 <button name="submit">update</button>
    </form>
</body>
</html>