<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $radio1=$_POST['gender'];
    if($radio1=="male")
    {
        $value="male";
    }
    elseif($radio1=="female")
    {
$value="female";
    }
    $name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$district=$_POST['district'];
mysqli_query($con,"INSERT INTO stureg_tb(Name,dob,gender,email,phone_no,district) VALUES ('$name','$dob','$value','$email','$phone','$district')");

$id=mysqli_insert_id($con);
mysqli_query($con,"INSERT INTO login_tb(user_name,password,type,id) VALUES ('$name','$pwd','admin','$id')");
}
?>

<form method="POST" action="">
Name: <input type="text" name="name"><br>
date of birth: <input type="date" name="dob"><br>
gender: <input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female <br>
email: <input type="email" name="email"> <br>
phone no: <input type="text" name="phone"> <br>
user name: <input type="text" name="uname"> <br>
password: <input type="password" name="pwd"> <br>
district:
<select name="district" >
<option ></option>
<option value="alapuzha">Alapuzha</option>
<option value="thrissur">Thrissur</option>
<option value="kozhikode">Kozhikode</option>
<option value="kannur">Kannur</option>
<option value="kasargod">Kasargod</option>
<option value="wayanadu">Wayanadu</option>
<option value="idukki">Idukki</option> 

</select>
<button name="submit">SUBMIT</button>
</form>
